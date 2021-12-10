@extends('layouts.auth')

@section('content')
<section class="mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5">
                <h4 class="text-center pb-3">{{ __('Login Your Account') }}</h4>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Email or Username</label>
                                        <input type="text" name="usermail" id="usermail" class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter a valid email or username" value="{{ old('username') ? : old('email') }}" required autocomplete="username" autofocus>

                                        @if ($errors->has('username') || $errors->has('email'))
                                            <span class="invalid-feedback form-text">
                                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required autocomplete="password" autofocus>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="button dark md block">Login</button>
                                </div>
                                <div class="col-xl-12 text-center">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-muted">Forgot your password?</a>
                                    @endif
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
