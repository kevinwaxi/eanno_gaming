@extends('layouts.auth')

@section('content')
  <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
    style="background-image: url('assets/img/curved-images/curved8.jpg');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center mx-auto">
          <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          <p class="text-lead text-white">
            Eanno Gaming is a limited community. You need to make a request and check your inbox for invite link
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card z-index-0">
          <div class="card-header text-center pt-4">
            <h5>Request</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('storeInvitation') }}">
              @csrf
              <div class="mb-3">
                <input id="email" type="email" placeholder="Email Address"
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                  autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="mb-3">
                <input id="phone" type="phone" placeholder="Mobile Number"
                  class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                  autocomplete="phone" autofocus>

                @error('phone')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">{{ __('Request Invite Link') }}
                </button>
              </div>
              <div class="mb-2 position-relative text-center">
                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                  or
                </p>
              </div>
              <div class="text-center">
                <a class="btn btn-link" href="{{ route('login') }}">
                  Already Have An Account?
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
