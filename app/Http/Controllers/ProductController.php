<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // $products = Product::paginate(10);
        $products = Product::with('category')->paginate(10);

        return view('admin.product', compact('products', 'categories'));
    }

    // public function store(Request $request)
    // {
    //     try {
    //         DB::beginTransaction();
    //         $validated = $request->validate([
    //             'name' => ['required', 'string', 'max:255'],
    //             'description' => ['required', 'string', 'max:255'],
    //             'price' => ['required', 'numeric'],
    //             'image' => ['required', 'image', 'max:2048'],
    //             'stock' => ['required', 'numeric'],
    //             'category_id' => ['required', 'exists:categories,id'],
    //         ],);

    //         $image = $request->file('image');
    //         $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
    //         $validated['image'] = 'data:' . $image->getMimeType() . ';base64,' . $imageBase64;

    //         Product::create($validated);
    //         DB::commit();
    //         return redirect()->back()
    //             ->with('success', 'Product created successfully');
    //     } catch (Exception $e) {
    //         DB::rollBack();
    //         return redirect()->back()
    //             ->with('error', 'Product not created');
    //     }
    // }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'image' => ['required', 'image', 'max:2048'], // Gambar Utama
                'stock' => ['required', 'numeric'],
                'category_id' => ['required', 'exists:categories,id'],
                'images' => ['nullable', 'array'],
                'images.*' => ['image', 'max:2048']
            ]);

            // Buat array untuk semua gambar
            $allImages = [];

            // 1. Proses Gambar Utama (WAJIB ADA)
            $image = $request->file('image');
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
            $allImages[] = 'data:' . $image->getMimeType() . ';base64,' . $imageBase64;

            // 2. Proses Gambar Tambahan (Opsional)
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $additionalImageFile) {
                    $imageBase64 = base64_encode(file_get_contents($additionalImageFile->getRealPath()));
                    $allImages[] = 'data:' . $additionalImageFile->getMimeType() . ';base64,' . $imageBase64;
                }
            }

            // 3. Masukkan array gambar ke data validasi
            $validated['image'] = $allImages;
            // Hapus 'images' karena sudah digabung
            unset($validated['images']);

            Product::create($validated);
            DB::commit();
            return redirect()->back()
                ->with('success', 'Product created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error storing product: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Product not created: ' . $e->getMessage());
        }
    }

    // public function update(Request $request, Product $product)
    // {
    //     try {
    //         DB::beginTransaction();
    //         $validated = $request->validate([
    //             'name' => ['required', 'string', 'max:255'],
    //             'description' => ['required', 'string', 'max:255'],
    //             'price' => ['required', 'numeric'],
    //             'stock' => ['required', 'numeric'],
    //             'image' => ['nullable', 'image', 'max:2048'],
    //             'category_id' => ['required', 'exists:categories,id'],
    //         ],);

    //         if ($request->hasFile('image')) {
    //             $image = $request->file('image');
    //             $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
    //             $validated['image'] = 'data:' . $image->getMimeType() . ';base64,' . $imageBase64;
    //         }

    //         $product->update($validated);
    //         DB::commit();
    //         return redirect()->back()
    //             ->with('success', 'Product updated successfully');
    //     } catch (Exception $e) {
    //         DB::rollBack();
    //         return redirect()->back()
    //             ->with('error', 'Product not updated');
    //     }
    // }

    public function update(Request $request, Product $product)
    {
        try {
            DB::beginTransaction();
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'stock' => ['required', 'numeric'],
                'image' => ['nullable', 'image', 'max:2048'], // Ganti gambar utama
                'category_id' => ['required', 'exists:categories,id'],
                'images' => ['nullable', 'array'], // Tambah gambar baru
                'images.*' => ['image', 'max:2048'],
                'delete_images' => ['nullable', 'array'], // ⬅️ Hapus gambar
                'delete_images.*' => ['string'] // Ini akan berisi string base64
            ]);

            // 1. Update semua data non-gambar
            $product->update($request->except(['image', 'images', 'delete_images']));

            // 2. Hapus gambar yang dicentang
            if ($request->has('delete_images')) {
                foreach ($request->delete_images as $imageToDelete) {
                    $product->removeImage($imageToDelete); // Panggil method model (tanpa save)
                }
            }

            // 3. Tambah gambar baru
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $additionalImageFile) {
                    $imageBase64 = base64_encode(file_get_contents($additionalImageFile->getRealPath()));
                    $imageData = 'data:' . $additionalImageFile->getMimeType() . ';base64,' . $imageBase64;
                    $product->addImage($imageData); // Panggil method model (tanpa save)
                }
            }

            // 4. Ganti gambar utama (jika ada)
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
                $imageData = 'data:' . $image->getMimeType() . ';base64,' . $imageBase64;
                $product->setPrimaryImage($imageData); // Panggil method model (tanpa save)
            }

            // 5. Simpan semua perubahan gambar sekaligus
            $product->save();

            DB::commit();
            return redirect()->back()
                ->with('success', 'Product updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating product: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Product not updated: ' . $e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        try {
            DB::beginTransaction();
            $product->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'Product deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Product not deleted');
        }
    }

    public function productPage()
    {
        $categories = Category::all();
        $products = Product::all();

        $query = Product::query();

        if ($search = request('search')) {
            $query->where('name', 'like', "%$search%");
        }

        if ($category = request('category')) {
            $query->where('category_id', $category);
        }

        $usd_rate = Cache::remember('usd_to_idr_rate', now()->addHours(6), function () {
            try {
                $apiKey = env('EXCHANGERATE_API_KEY');

                // Jika API key tidak di-set, gunakan nilai fallback
                if (!$apiKey) {
                    Log::warning('EXCHANGERATE_API_KEY not set. Using fallback rate.');
                    return 15500; // Nilai fallback
                }

                // Panggil API menggunakan Laravel HTTP Client
                $response = Http::get("https://v6.exchangerate-api.com/v6/{$apiKey}/latest/USD");

                if ($response->successful()) {
                    // Ambil kurs IDR dari respons JSON
                    return (float) $response->json()['conversion_rates']['IDR'];
                } else {
                    // Jika API gagal (misal: key salah, server down)
                    Log::error('Failed to fetch exchange rate. API response: ' . $response->body());
                    return 15500; // Nilai fallback
                }
            } catch (\Exception $e) {
                // Jika ada error koneksi atau lainnya
                Log::error('Error fetching exchange rate: ' . $e->getMessage());
                return 15500; // Nilai fallback
            }
        });

        $sort = request('sort', 'newest');
        if ($sort == 'price_low') $query->orderBy('price', 'asc');
        elseif ($sort == 'price_high') $query->orderBy('price', 'desc');
        else $query->latest();

        $products = $query->paginate(12)->withQueryString();

        return view('landing.product-page', compact('categories', 'products', 'usd_rate'));
    }

    // public function showJson(Product $product)
    // {
    //     $product->load('category');
    //     $imagePaths = $product->getAllImages();

    //     $allImages = collect($imagePaths)->filter()->map(function ($path) {

    //         if (str_starts_with($path, 'data:image')) {
    //             return $path;
    //         }
    //         return asset('storage/' . $path);
    //     })->unique()->values();

    //     return response()->json([
    //         'id' => $product->id,
    //         'name' => $product->name,
    //         'price' => $product->getFormattedPriceAttribute(),
    //         'description' => $product->description ?? 'Tidak ada deskripsi untuk produk ini.',
    //         'category' => $product->category->name ?? 'Uncategorized',
    //         'images' => $allImages,
    //     ]);
    // }

    public function showJson(Product $product)
    {
        $product->load('category');

        // Panggil method dari model Anda, ini sudah benar
        $imagePaths = $product->getAllImages();

        // Karena $imagePaths sekarang adalah array base64, kita tidak perlu
        // filter 'data:image' atau 'asset()' lagi.
        $allImages = collect($imagePaths)->filter()->unique()->values();

        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->getFormattedPriceAttribute(), // Gunakan accessor
            'description' => $product->description ?? 'Tidak ada deskripsi.',
            'category' => $product->category->name ?? 'Uncategorized',
            'images' => $allImages, // Ini sudah array
        ]);
    }
    public function serveImage($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        
        // Ambil string Base64 dari accessor/kolom database Anda
        $base64_image = $product->getPrimaryImage(); 

        // Cek apakah string kosong
        if (empty($base64_image)) {
            abort(404);
        }

        // Bersihkan prefix data URI (misal: "data:image/png;base64,") jika ada
        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image, $type)) {
            $base64_image = substr($base64_image, strpos($base64_image, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif
            
            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
                $type = 'jpeg'; // default fallback
            }
        } else {
            $type = 'jpeg'; // default jika tidak ada header
        }

        $image_content = base64_decode($base64_image);

        // Kembalikan sebagai response gambar, bukan teks HTML
        return response($image_content)
            ->header('Content-Type', 'image/' . $type)
            ->header('Cache-Control', 'max-age=86400, public'); // Cache 1 hari biar ngebut
    }
}
