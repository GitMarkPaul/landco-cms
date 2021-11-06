@extends('layouts.auth')

@section('content')
<section>
    <div class="container container-center">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="tf-card">
                    <div class="card-body">
                        <h4 class="text-center">Login to your account</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row g-3 mt-3">
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
                                    <button type="submit" class="btn btn-dark tf-btn-lg w-100">Login</button>
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
