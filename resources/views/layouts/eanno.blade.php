<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ __(' Eanno Gaming') }}</title>

  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    @if (Auth::check())
      <app-layout :user="{{ Auth::user() }} "></app-layout>
    @else
      <app-layout :user="false"></app-layout>
    @endif
  </div>
  {{-- vue js and modules --}}
  <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
