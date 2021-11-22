@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Website Details</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('settings') }}">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Information</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->

        <div class="row g-4">
            <div class="col-xl-6">
                <h4>Primary Information</h4>
                <p>Update website information for Searh Engine Optimization(SEO). This helps your website become more discoverable. When potential customers search terms related to your brand, they’ll have a better chance of discovering your website and becoming a customer.</p>
            </div>
            <div class="col-xl-6">
                <div class="tf-card">
                    <div class="card-body">
                        <form action="">
                            @csrf
                            <div class="row row-cols-1 g-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-title" class="form-label">Site Name</label>
                                        <input type="text" name="site_name" class="form-control" value="{{ old('site_name') }}">
                                    </div> 
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-description" class="form-label">Description</label>
                                        <textarea rows="3" type="text" name="site_desc" class="form-control">{{ old('site_desc') }}</textarea>
										<div class="form-text">In a few words, explain what this site is about.</div>
                                    </div> 
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-address" class="form-label">Address</label>
                                        <input type="text" name="site_address" class="form-control" value="{{ old('site_address') }}">
                                    </div> 
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-email" class="form-label">Email</label>
                                        <input type="email" name="site_email" class="form-control" value="{{ old('site_email') }}">
                                    </div> 
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-fax" class="form-label">Fax No.</label>
                                        <input type="number" name="site_fax" class="form-control" value="{{ old('site_fax') }}">
                                    </div> 
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-tel" class="form-label">Tel No.</label>
                                        <input type="tel" name="site_tel" class="form-control" value="{{ old('site_tel') }}">
                                    </div> 
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="site-mobile" class="form-label">Mobile No.</label>
                                        <input type="tel" name="site_mobile" class="form-control" value="{{ old('site_mobile') }}">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection