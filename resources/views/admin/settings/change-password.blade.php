@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Change Your Password</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('settings') }}">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account Security</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->

        <div class="row justify-content-center g-4">
            <div class="col-xl-8">
                <div class="tf-section-heading text-center">
                    <h4 class="tf-section-title">Set your new password</h4>
                    <p>Ensure your account is using a long, random password to stay secure. Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</p>
                </div>
            </div>
            @if(Session::has('success'))
            <div class="col-xl-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <span>{{ Session::get('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
            @if(session('error'))
            <div class="col-xl-8">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Something went wrong!</h4>
                    <span>{{ session('error') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
            <div class="col-xl-6 col-lg-9 col-md-10 col-12">
                <div class="tf-card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('update_password') }}">
                            @csrf
                            <div class="row row-cols-1 g-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="current-mpin" class="form-label">Enter Current Password</label>
                                        <input type="password" name="current-password" id="current-password" class="form-control {{ $errors->has('current-password') ? ' has-error' : '' }}" placeholder="********" required>

                                        @if ($errors->has('current-password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="new-mpin" class="form-label">Enter New Password</label>
                                        <input type="password" name="new-password" id="new-password" class="form-control {{ $errors->has('new-password') ? ' has-error' : '' }}" placeholder="********" required>

                                        @if ($errors->has('new-password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $errors->first('new-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="confirm-mpin" class="form-label">Confirm New Password</label>
                                        <input type="password" name="new-password_confirmation" id="new-password-confirm" class="form-control" placeholder="********" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="tf-btn tf-btn-primary tf-btn-lg w-100 text-uppercase">Update Password</button>
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