@extends('layouts.auth')

@section('content')
<section>
    <div class="container container-center">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">{{ __('Reset Password') }}</h4>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row g-3 mt-3">
                                @if (session('status'))
                                    <div class="col-xl-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <span>{{ session('status') }}</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your valid email" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback form-text" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="btn btn-dark tf-btn-lg w-100">{{ __('Send Password Reset Link') }}</button>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">Back to login</a>
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

