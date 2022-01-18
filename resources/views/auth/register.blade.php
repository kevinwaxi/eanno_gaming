@extends('layouts.auth')

@section('content')
  <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
    style="background-image: url('assets/img/curved-images/curved8.jpg');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center mx-auto">
          <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          <p class="text-lead text-white">This is Eanno Gaming dashboard area.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
      <div class="col-xl-7 col-lg-5 col-md-7 mx-auto">
        <div class="card z-index-0">
          <div class="card-header text-center pt-4">
            <h5>Register</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="row mb-3">
                <div class="col-6">
                  <input type="email" placeholder="Email Address"
                    class="form-control disabled @error('email') is-invalid @enderror" value="{{ $email }}"
                    required autofocus>
                  <input type="hidden" name="email" value="{{ $email }}">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <input type="tel" class="form-control disabled @error('phone') is-invalid @enderror" disabled
                    value="{{ $phone }}" placeholder="Mobile Number" required autofocus>
                  <input type="hidden" value="{{ $phone }}" name="phone">
                  @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-12">
                  <input id="name" type="name" placeholder="Full Name"
                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                    required autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <div class="col-8">
                  <input type="name" placeholder="username" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autofocus>

                  @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-6">
                  <input type="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-6">
                  <input id="password-confirm" type="password" placeholder="Confirm Password"
                    class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
                  @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">{{ __('Register') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
