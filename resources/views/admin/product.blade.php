@extends('layouts.layout-admin')

@section('title', 'Products')

@section('header_title', 'Products')
@section('header_subtitle', 'Manage your products')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Products List</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
            <i class="bi bi-plus-circle me-2"></i>Add Product
        </button>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <input type="text" id="searchInput" class="form-control form-control-sm"
                            placeholder="Search products...">
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>
                                {{-- Menampilkan gambar index ke-0 --}}
                                <img src="{{ route('product.image', ['id' => $product->id, 'index' => 0]) }}"
                                    alt="{{ $product->name }}" class="img-thumbnail"
                                    style="max-width: 50px; height: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name ?? 'No Category' }}</td>
                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    {{-- TOMBOL EDIT AJAX --}}
                                    {{-- Perhatikan data-url di sini --}}
                                    <button type="button" class="btn btn-sm btn-info edit-product-btn" 
                                        data-url="{{ route('admin.products.edit-form', $product->id) }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                        class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No products found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Copy paste isi form create kamu yang sebelumnya di sini --}}
                        {{-- Saya singkat agar fokus ke solusi Edit --}}
                        <div class="mb-3">
                            <label class="form-label">Category *</label>
                            <select class="form-select" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description *</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price *</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock *</label>
                            <input type="number" class="form-control" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image *</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="globalEditModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- Konten form akan dimuat di sini via AJAX --}}
                <div id="editModalContent">
                    <div class="text-center py-5">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('styles')
<style>
    .img-thumbnail { object-fit: cover; }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        // --- LOGIC BARU: AJAX EDIT MODAL ---
        const editModalElement = document.getElementById('globalEditModal');
        const editModal = new bootstrap.Modal(editModalElement);
        const modalContent = document.getElementById('editModalContent');

        // Gunakan Event Delegation agar tombol tetap jalan setelah search/pagination
        document.body.addEventListener('click', function(e) {
            // Cek apakah tombol edit yang diklik
            const targetButton = e.target.closest('.edit-product-btn');
            
            if (targetButton) {
                const url = targetButton.getAttribute('data-url');
                
                // 1. Tampilkan modal & Loading Spinner
                modalContent.innerHTML = `
                    <div class="text-center py-5">
                        <div class="spinner-border text-primary" role="status"></div>
                        <p class="mt-2">Loading data...</p>
                    </div>
                `;
                editModal.show();

                // 2. Fetch Form dari Server
                fetch(url)
                    .then(response => {
                        if (!response.ok) throw new Error('Network response was not ok');
                        return response.text();
                    })
                    .then(html => {
                        // 3. Masukkan Form ke Modal
                        modalContent.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        modalContent.innerHTML = `
                            <div class="modal-body text-center text-danger">
                                <p>Gagal memuat data. Silakan coba lagi.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        `;
                    });
            }
        });
        // --- END LOGIC AJAX ---

        // Search JS (Simple Client Side)
        const searchInput = document.getElementById('searchInput');
        if(searchInput){
            searchInput.addEventListener('keyup', function () {
                let input = this.value.toLowerCase();
                let rows = document.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    let text = row.textContent.toLowerCase();
                    row.style.display = text.includes(input) ? '' : 'none';
                });
            });
        }

        // SweetAlert Notifications
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('error') }}",
                showConfirmButton: true
            });
        @endif

        // Delete Confirmation
        document.body.addEventListener('submit', function(e) {
            if(e.target.classList.contains('delete-form')){
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.target.submit();
                    }
                });
            }
        });
    });
</script>
@endpush