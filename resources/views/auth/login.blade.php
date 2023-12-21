@extends('auth.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Log In</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <label for="floatingInput">Email address</label>

                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="floatingPassword">Password</label>

                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-grid text-center">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Log
                                in</button>
                        </div>
                        <div class="text-center">
                            <a href="{{route('register')}}" class="btn btn-link">Do no have account? Register now. </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection