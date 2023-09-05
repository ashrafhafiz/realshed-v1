@extends('admin.layout.master2')

@section('content')
    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="mx-0 row w-100 auth-page">
            <div class="mx-auto col-md-8 col-xl-6">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper"
                                 style="background-image: url({{ asset('assets/images/img6.jpg') }})">

                            </div>
                        </div>
                        <div class="col-md-8 ps-md-0">
                            <div class="px-4 py-5 auth-form-wrapper">
                                <a href="#" class="mb-2 noble-ui-logo d-block">Real<span>Shed</span></a>
                                <h5 class="mb-4 text-muted fw-normal">Welcome back! Log in to your account.</h5>
                                <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="login" class="form-label">Email address/Username/Phone</label>
                                        <input type="text" class="form-control" id="login" name="login"
                                               value="{{ old('login') }}" required autofocus autocomplete="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               autocomplete="current-password" required>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="authCheck" name="remember">
                                        <label class="form-check-label" for="authCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <div>
                                        <button type="submit" class="mb-2 btn btn-primary me-2 mb-md-0">Login</button>
                                        <button type="button"
                                                class="mb-2 btn btn-outline-primary btn-icon-text mb-md-0">
                                            <i class="btn-icon-prepend" data-feather="twitter"></i>
                                            Login with twitter
                                        </button>
                                    </div>
                                    <a href="{{ url('/auth/register') }}" class="mt-3 d-block text-muted">Not a user?
                                        Sign
                                        up</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
