@extends('layouts.layout-admin')

@section('title', 'Blog Posts')
@section('header_title', 'Blog Posts')
@section('header_subtitle', 'Manage your blog content')


@push('styles')
<style>
    .modal-body {
        max-height: 70vh;
        overflow-y: auto;
    }

    .ck-editor__editable_inline {
        min-height: 200px;
        max-height: 500px;
        overflow-y: auto;
    }

    .img-thumbnail {
        object-fit: cover;
    }

    /* ✅ Tampil preview rapi */
    .content-preview {
        max-width: 350px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* jumlah baris preview */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        font-size: 14px;
        color: #444;
    }
</style>
@endpush



@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Blog Posts</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
            <i class="bi bi-plus-circle me-2"></i>Add Post
        </button>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <input type="text" id="searchInput" class="form-control form-control-sm"
                        placeholder="Search posts...">
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Content Preview</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr>
                            <td>
                                <img src="{{ asset($post->image) }}" class="img-thumbnail" style="max-width:60px;">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td class="content-preview">{!! strip_tags($post->content) !!}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#editPostModal{{ $post->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
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

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editPostModal{{ $post->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('admin.posts.update', $post) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Post</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Title *</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $post->title }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Content *</label>
                                                <textarea name="content" class="form-control ckeditor" rows="6">{{
                                                    $post->content }}</textarea>

                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Current Image</label><br>
                                                <img src="{{ asset($post->image) }}" class="img-thumbnail mb-2"
                                                    style="height:90px;">
                                                <input type="file" name="image" class="form-control">
                                                <small class="text-muted">Leave empty to keep current image</small>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No posts found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $posts->links() }}
            </div>

        </div>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" id="addPostModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content *</label>
                            <textarea name="content" class="form-control ckeditor" rows="6"></textarea>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Thumbnail *</label>
                            <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary">Save Post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    let editors = {};

    document.querySelectorAll('.ckeditor').forEach((textarea, i) => {
        if (!textarea.id) textarea.id = 'editor-' + i;

        ClassicEditor.create(textarea).then(editor => {
            editors[textarea.id] = editor;
        });
    });

    // ✅ Saat submit, paksa sinkronisasi semua CKEditor ke textarea
    document.addEventListener('submit', function () {
        Object.keys(editors).forEach(id => {
            const textarea = document.getElementById(id);
            textarea.value = editors[id].getData();
        });
    });



    // Search Input Filter
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keyup', function () {
            let val = this.value.toLowerCase();
            document.querySelectorAll("tbody tr").forEach(row => {
                row.style.display = row.textContent.toLowerCase().includes(val) ? "" : "none";
            });
        });
    }

    // SweetAlert Success Notification
    @if (session('success'))
        Swal.fire({ icon: 'success', title: 'Success!', text: "{{ session('success') }}", timer: 3000, showConfirmButton: false });
    @endif

    // Delete Confirmation
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete this post?',
                text: "This action cannot be undone.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.isConfirmed) form.submit();
            });
        });
    });
</script>

@endpush