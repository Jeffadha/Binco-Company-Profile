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
        $products = Product::paginate(10);

        return view('admin.product', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'image' => ['required', 'image', 'max:2048'],
                'stock' => ['required', 'numeric'],
                'category_id' => ['required', 'exists:categories,id'],
            ],);

            $image = $request->file('image');
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
            $validated['image'] = 'data:' . $image->getMimeType() . ';base64,' . $imageBase64;

            Product::create($validated);
            DB::commit();
            return redirect()->back()
                ->with('success', 'Product created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Product not created');
        }
    }

    public function update(Request $request, Product $product)
    {
        try {
            DB::beginTransaction();
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'stock' => ['required', 'numeric'],
                'image' => ['nullable', 'image', 'max:2048'],
                'category_id' => ['required', 'exists:categories,id'],
            ],);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
                $validated['image'] = 'data:' . $image->getMimeType() . ';base64,' . $imageBase64;
            }

            $product->update($validated);
            DB::commit();
            return redirect()->back()
                ->with('success', 'Product updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Product not updated');
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

    public function showJson(Product $product)
    {
        $product->load('category');
        $imagePaths = $product->getAllImages();

        $allImages = collect($imagePaths)->filter()->map(function ($path) {

            if (str_starts_with($path, 'data:image')) {
                return $path;
            }
            return asset('storage/' . $path);
        })->unique()->values();

        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->getFormattedPriceAttribute(),
            'description' => $product->description ?? 'Tidak ada deskripsi untuk produk ini.',
            'category' => $product->category->name ?? 'Uncategorized',
            'images' => $allImages,
        ]);
    }
}
