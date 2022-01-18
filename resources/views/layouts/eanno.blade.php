<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ __(' Eanno Gaming') }}</title>

  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet" />

  {{-- styles --}}
  <style>
    .fade-enter-active,
    .fade-leave-active {
      transition: opacity 0.5s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
      opacity: 0;
    }

  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <div id="app">
    {{-- Aside --}}
    @include('partials.aside')
    {{-- End Section --}}
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
      {{-- Navbar --}}
      @include('partials.navbar')
      {{-- End Navbar --}}
      <div class="container-fluid py-4">
        {{-- Router Vue starts here --}}
        <transition name="fade" mode="out-in">
          <router-view />
        </transition>
        {{-- Router -vue ends here --}}
        {{-- footer --}}
        @include('partials.footer')
        {{-- End Footer --}}
      </div>
    </main>

  </div>
  {{-- vue files --}}
  <script src="{{ mix('js/app.js') }}"></script>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/soft-ui-dashboard.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
</body>

</html>
