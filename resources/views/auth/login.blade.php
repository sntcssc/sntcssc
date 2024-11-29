@extends('admin.layouts.master-auth')
@section('title')  __('auth_login') @endsection
@section('content')

    <div class="w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="auth-card mx-lg-3">
                        <div class="card border-0 mb-0">
                            <div class="card-header bg-primary border-0">
                                <div class="row">
                                    <div class="col-lg-4 col-3">
                                        <img src="{{ URL::asset('assets/images/auth/img-1.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="col-lg-8 col-9">
                                        <h1 class="text-white lh-base fw-lighter">{{ __('auth_login_title') }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted fs-15">Sign in to continue</p>
                                <div class="p-2">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="test@gmail.com" required autocomplete="email" autofocus
                                                placeholder="Enter your email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">

                                            @if (Route::has('password.request'))
                                            <div class="float-end">
                                                <a href="{{ route('password.request') }}" class="text-muted">{{ __('auth_forgot_password') }} ?</a>
                                            </div>
                                            @endif
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password" placeholder="Enter your password" value="12345678">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="auth-remember-check">{{ __('field_remember') }}</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">{{ __('auth_login') }}</button>
                                        </div>

                                        <div class="mt-4 pt-2 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                            </div>
                                            <div class="pt-2 hstack gap-2 justify-content-center">
                                                <button type="button" class="btn btn-soft-primary btn-icon"><i
                                                        class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-soft-danger btn-icon"><i
                                                        class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-soft-dark btn-icon"><i
                                                        class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-soft-info btn-icon"><i
                                                        class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                    @if (Route::has('register'))
                                    <div class="text-center mt-5">
                                        <p class="mb-0">{{ __("auth_dont_have_account") }} <a href="{{ route('register') }}"
                                                class="fw-semibold text-secondary text-decoration-underline"> {{ __('auth_register') }}</a>
                                        </p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                @isset($setting->copyright_text)
                                <p class="mb-0 text-muted">&copy; {!! strip_tags($setting->copyright_text, '<a><b><br>') !!}</p>
                                @endisset
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/js/pages/password-addon.init.js') }}"></script>
@endsection
