@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">{{ $career_details->title }}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('careers.index') }}">Job Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>  
        <!-- End: Breadcrumb -->
        
        <form method="POST" action="{{ route('careers.update', encrypt($career_details->id)) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row g-4">
                @if(Session::has('success'))
                <div class="col-xl-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <span>{{ Session::get('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                <div class="col-xl-9">
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Job Title *</label>
                                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Write some title here..." value="{{ $career_details->title }}" required>
        
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
                                                <textarea name="excerpt" class="form-control @error('excerpt') is-invalid @enderror" rows="3" placeholder="The summary of the blog (optional)">{{ $career_details->excerpt }}</textarea>
        
                                                @error('excerpt')
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title" class="form-label">Job Description</label>
                                        <textarea name="content" class="form-control content-editor" placeholder="Write some content here..">{{ $career_details->content }}</textarea>
        
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Job Status *</label>
                                                <select name="status" class="form-control form-select @error('status') is-invalid @enderror" required>
                                                    <option {{ $career_details->status == "Active" ? 'selected' : '' }} value="Active">Publicly Viewable</option>
                                                    <option {{ $career_details->status == "Inactive" ? 'selected' : '' }} value="Inactive">Private</option>
                                                </select>

                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="title" class="form-label">Location</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="location"><i class="bi bi-geo-alt"></i></span>
                                                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="Type the location (optional)" value="{{ $career_details->location }}" aria-label="File Link" aria-describedby="location">
        
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Job Thumbnail</label>
                                                @php
                                                    if(is_null($career_details->file_id)) {
                                                        $file = asset('img/default-thumbnail.jpg');
                                                    } else {
                                                        $file = asset('storage/files/'.$career_details->file->file_name);
                                                    }
                                                @endphp
                                                <img src="{{ $file }}" class="thumbnail-md mb-3" id="preview-img" alt="image"/>
                                                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" value="{{ old('file') }}" accept="image/*" onchange="readURL(this);">
                                                <input type="hidden" name="file_id" class="form-control" value="{{ isset($career_details->file->id) ? $career_details->file->id : NULL }}">
                                                <input type="hidden" name="file_name" class="form-control" value="{{ isset($career_details->file->file_name) ? $career_details->file->file_name : NULL }}">
                                                @error('file')
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
                    <div class="card fixed-bottom position-fixed b-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('careers.index') }}" class="button secondary text-dark mx-3">Back</a>
                                <button type="submit" class="button primary gap-2"><i class="bi bi-send-fill"></i> Update Job Posting</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@endsection

@push('scripts')
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
@endpush