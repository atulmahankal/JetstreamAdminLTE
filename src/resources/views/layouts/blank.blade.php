<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title',ucfirst(explode('.', trim(Route::currentRouteName()))[0])) : {{ ucfirst(config('app.name', 'Laravel')) }}</title>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">


  <!-- Vite -->
  {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css?v=3.2.0') }}">
  @yield('style')

</head>
<body class="hold-transition">
  <div id="app">
    <main class="py-4">
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/adminlte/js/adminlte.min.js?v=3.2.0') }}"></script>
  @yield('script')
</body>
</html>
