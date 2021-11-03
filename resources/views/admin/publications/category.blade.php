@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Create New Category</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.html">Home</a></li>
                <li class="breadcrumb-item"><a href="blog-listing.html">Blog Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->
        
        <form method="POST" action="{{ route('pub_cat_store') }}">
            @csrf
            <div class="row g-4">
                <div class="col-xl-12">
                    <div class="tf-card">
                        <div class="card-body">
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
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="tf-card fixed-bottom">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="tf-btn tf-btn-primary w-m-100">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@endsection