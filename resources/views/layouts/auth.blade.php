<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ __(' Eanno Gaming') }}</title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">


  <!-- Sweet Alert -->
  <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="{{ asset('/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">


  <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>


  <main>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
      <div class="container">
        @if (Session::has('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <span class="fas fa-bullhorn me-1"></span>
            <strong>Awesome!</strong> {{ session::get('success') }}.
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <p class="text-center">
          <a href="../dashboard/dashboard.html" class="d-flex align-items-center justify-content-center">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                clip-rule="evenodd">
              </path>
            </svg>
            Back to homepage
          </a>
        </p>
        @yield('content')
      </div>
    </section>
  </main>

  <!-- Core -->
  <script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Vendor JS -->
  <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

  <!-- Slider -->
  <script src="{{ asset('vendor/nouislider/distribute/nouislider.min.js') }}"></script>

  <!-- Smooth scroll -->
  <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

  <!-- Charts -->
  <script src="{{ asset('vendor/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

  <!-- Datepicker -->
  <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.j') }}s"></script>

  <!-- Sweet Alerts 2 -->
  <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

  <!-- Notyf -->
  <script src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>

  <!-- Simplebar -->
  <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="{{ asset('assets/js/volt.js') }}"></script>
</body>

</html>
