@extends('layouts.auth')

@section('content')
<section>
    <div class="container container-center">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="tf-card">
                    <div class="card-body">
                        <h4 class="text-center">{{ __('Reset Password') }}</h4>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row g-3 mt-3">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="password" class="form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="btn btn-dark tf-btn-lg w-100">{{ __('Reset Password') }}</button>
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




