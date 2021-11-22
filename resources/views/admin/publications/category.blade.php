@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Manage Blogs Category</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pub_index') }}">Blog Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->

        <div class="row row-cols-1 g-4">
            @if(Session::has('success'))
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <span>{{ Session::get('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
            <div class="col">
                <div class="d-flex justify-content-end">
                    <button type="button" class="tf-btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategory">Add New Category</button>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pub_cats as $key => $value)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $value->category_name }}</td>
                                    <td class="text-center">{{ $value->status }}</td>
                                    <td>
                                        <div class="dropdown d-flex justify-content-center dropend">
                                            <button class="tf-btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Settings
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item edit" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}" data-category_name="{{ $value->category_name }}" data-status="{{ $value->status }}"><ion-icon name="create"></ion-icon> Edit Category</a></li>
                                                <li><a class="dropdown-item delete" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}"><ion-icon name="trash"></ion-icon>Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Blog Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('pub_cat_store') }}">
                @csrf
                <div class="modal-body">
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="title" class="form-label">Category Title *</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Write some title here..." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="title" class="form-label">Status *</label>
                                <select name="status" class="form-control form-select" required>
                                    <option value="Active">Public</option>
                                    <option value="Inactive">Private</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('pub_cat_update') }}">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" id="cat_id">
                <div class="modal-body">
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="title" class="form-label">Category Title *</label>
                                <input type="text" name="category_name" id="cat_name" class="form-control" placeholder="Write some title here..." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="title" class="form-label">Status *</label>
                                <select name="status" id="cat_status" class="form-control form-select" required>
                                    <option value="Active">Public</option>
                                    <option value="Inactive">Private</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('pub_cat_delete') }}">
                @method('DELETE')
                @csrf
                <input type="hidden" class="form-control" name="id" id="del_cat_id">
                <div class="modal-body">
                    <p>This will remove this post from your blog. You will no longer be able to view or edit it once deleted.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).on('click', '.edit', function() {
            $('#cat_id').val($(this).data('id'));
            $('#cat_name').val($(this).data('category_name'));
            $('#cat_status').val($(this).data('status'));
            $('#editCategory').modal('show');
		});

        $(document).on('click', '.delete', function() {
            $('#del_cat_id').val($(this).data('id'));
            $('#deleteCategory').modal('show');
		});
    </script>
@endsection