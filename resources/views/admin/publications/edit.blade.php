@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">{{ $pub_details->title }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pub_index') }}">Blog Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->
        
        <form method="POST" action="{{ route('pub_update', encrypt($pub_details->id)) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row g-4">
                <div class="col-xl-9">
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <div class="tf-card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Blog Title *</label>
                                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Write some title here..." value="{{ $pub_details->title }}" required>
        
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
        
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Excerpt</label>
                                                <textarea name="excerpt" class="form-control @error('excerpt') is-invalid @enderror" rows="3" placeholder="The summary of the blog..">{{ $pub_details->excerpt }}</textarea>
        
                                                @error('excerpt')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="title" class="form-label">Redirection Link Only</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="vanity_link"><ion-icon name="link-outline"></ion-icon></span>
                                                <input type="text" name="meta_link" class="form-control @error('meta_link') is-invalid @enderror" placeholder="Paste the link here..." value="{{ $pub_details->meta_link }}" aria-label="Vanity" aria-describedby="vanity_link">
                                            </div>
                                            <div class="form-text">Note: This link serves as the redirection to the article that is already published</div>
        
                                            @error('meta_link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tf-card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title" class="form-label">Content</label>
                                        <textarea name="content" class="form-control content-editor" placeholder="Write some content here..">{{ $pub_details->content }}</textarea>
            
                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <div class="tf-card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Author</label>
                                                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ $pub_details->author }}">

                                                @error('author')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tf-card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Date to be Published</label>
                                                <input type="date" name="published_on" class="form-control @error('published_on') is-invalid @enderror" value="{{ $pub_details->published_on }}">

                                                @error('published_on')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Blog Status *</label>
                                                <select name="status" class="form-control form-select @error('status') is-invalid @enderror" required>
                                                    <option {{ $pub_details->status == "Active" ? 'selected' : '' }} value="Active">Publicly Viewable</option>
                                                    <option {{ $pub_details->status == "Inactive" ? 'selected' : '' }} value="Inactive">Private</option>
                                                </select>

                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Blog Category *</label>
                                                <select name="category_id" class="form-control form-select @error('category_id') is-invalid @enderror" required>
                                                    @forelse($pub_cats as $key => $value)
                                                        <option {{ $value->id == $pub_details->category->id ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->category_name }}</option>
                                                    @empty
                                                        <option>Empty Data</option>
                                                    @endforelse
                                                </select>

                                                @error('category_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Label</label>
                                                <input type="text" name="label" class="form-control  @error('label') is-invalid @enderror" value="{{ $pub_details->label }}">

                                                @error('label')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="title" class="form-label">Location</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="location"><ion-icon name="location-outline"></ion-icon></span>
                                                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="Type the location (optional)" value="{{ $pub_details->location }}" aria-label="File Link" aria-describedby="location">
        
                                                @error('location')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="tf-card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Blog Thumbnail</label>
                                                <img src="{{ asset('storage/files/'. $pub_details->file->file_name) }}" class="thumbnail-md mb-3" id="preview-img" alt="">
                                                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" accept="image/*" onchange="readURL(this);">
                                                <input type="hidden" name="file_id" class="form-control" value="{{ $pub_details->file->id }}">
                                                <input type="hidden" name="file_name" class="form-control" value="{{ $pub_details->file->file_name }}">
                                                @error('file')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="title" class="form-label">File Link</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="file_link"><ion-icon name="image-outline"></ion-icon></span>
                                                <input type="text" name="file_link" class="form-control @error('file_link') is-invalid @enderror" placeholder="Paste the link here..." value="{{ $pub_details->file_link }}" aria-label="File Link" aria-describedby="file_link">
        
                                                @error('file_link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
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
                                <a href="{{ route('pub_index') }}" class="tf-btn tf-btn-secondary mx-3">Cancel Editing</a>
                                <button type="submit" class="tf-btn tf-btn-primary w-m-100"><ion-icon name="send"></ion-icon>Publish Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@endsection

@section('scripts')
<script src="https://cdn.tiny.cloud/1/zzubw4vq5fyaxdgpcaxa4zcfx43wyxc62zr3ii3a73exoddc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript" src="{{ asset('js/editor.js') }}"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                $('#preview-img').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection