{{-- File: resources/views/admin/products/partials/edit-form.blade.php --}}

<form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="modal-body">
        {{-- Category --}}
        <div class="mb-3">
            <label for="category_id" class="form-label">Category *</label>
            <select class="form-select" name="category_id" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Product Name --}}
        <div class="mb-3">
            <label for="name" class="form-label">Product Name *</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description *</label>
            <textarea class="form-control" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>

        {{-- Price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price *</label>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
            </div>
        </div>

        {{-- Stock --}}
        <div class="mb-3">
            <label for="stock" class="form-label">Stock *</label>
            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" required>
        </div>

        {{-- Main Image --}}
        <div class="mb-3">
            <label for="image" class="form-label">Product Image (Main)</label>
            <div class="mb-2">
                {{-- Pastikan logic getPrimaryImage() ada di Model Product --}}
                <img src="{{ $product->getPrimaryImage() ?? 'https://via.placeholder.com/100' }}"
                    alt="Current Image" class="img-thumbnail" style="max-height: 100px;">
            </div>
            <input type="file" class="form-control" name="image" accept="image/*">
            <small class="text-muted">Biarkan kosong untuk tetap memakai gambar utama saat ini</small>
        </div>

        {{-- Additional Images Logic --}}
        <div class="mb-3">
            <label class="form-label">Current Additional Images</label>
            <div class="d-flex flex-wrap gap-2 p-2 border rounded" style="min-height: 80px;">
                @php $allImages = $product->getAllImages(); @endphp

                @if(count($allImages) <= 1) 
                    <p class="text-muted small mb-0 align-self-center">Tidak ada gambar tambahan.</p>
                @else
                    @foreach ($allImages as $index => $imgData)
                        @if ($index == 0) @continue @endif

                        <div class="position-relative text-center">
                            <img src="{{ $imgData }}" class="img-thumbnail" style="height: 80px; width: 80px; object-fit: cover;">
                            
                            <div class="form-check position-absolute top-0 end-0" style="padding-left: 0;">
                                <input class="form-check-input" type="checkbox" name="delete_images[]"
                                    value="{{ $imgData }}" id="delete_img_{{ $product->id }}_{{ $index }}">
                                <label class="form-check-label bg-danger text-white px-1 rounded-sm"
                                    for="delete_img_{{ $product->id }}_{{ $index }}" style="cursor:pointer; font-size: 0.7rem;">
                                    Hapus
                                </label>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        {{-- Add More Images --}}
        <div class="mb-3">
            <label for="images" class="form-label">Add More Additional Images</label>
            <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
            <small class="text-muted">Pilih gambar baru untuk ditambahkan</small>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </div>
</form>