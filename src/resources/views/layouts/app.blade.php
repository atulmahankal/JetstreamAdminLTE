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
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"> <!-- Font Awesome -->

  <!-- Style -->
  @yield('plugins-style')
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css?v=3.2.0') }}"> <!-- AdminLTE Theme style -->
  @yield('style')

  <style>
    select {
        height: auto !important;
    }
    /* .jetstream-modal{
        padding-top: 10.5rem;
    } */
    .nav-sidebar .menu-open>.nav-link svg.right,
    .nav-sidebar .menu-open>.nav-link i.right,
    .nav-sidebar .menu-is-opening>.nav-link svg.right,
    .nav-sidebar .menu-is-opening>.nav-link i.right {
      -webkit-transform: rotate(-180deg);
      transform: rotate(-180deg);
    }
  </style>
  @yield('style')
  @livewireStyles
</head>
{{-- <body class="font-sans antialiased">
  <div id="app">
    @include('layouts.navbar')
    <main class="py-4">
      @yield('content')
    </main>
  </div> --}}

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
  <div class="wrapper">

    {{-- <div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="{{ asset('vendor/adminlte/img/AdminLTELogo.png') }}" alt="Logo" height="60" width="60">
  </div> --}}

  @include('layouts.main-header')
  @include('layouts.main-sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title',ucfirst(explode('.', trim(Route::currentRouteName()))[0]))</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @yield('breadcrumb')
            </ol>
          </div>
        </div>
      </div>
    </section>


    @hasSection('sticky-top')
    <div class="sticky-top mb-3 px-3">
      {{-- <div id="page_heading" class="uk-background-default" data-uk-sticky="{ top: 48, media: 960 }"> --}}
      @yield('sticky-top')
      {{-- </div> --}}
    </div>
    @endif
    <section class="content">
      <!-- Alert message (start) -->
      @if(Session::has('message'))
      <div class="notification {{ Session::has('alert-class') ? Session::get('alert-class') : 'uk-alert' }}" style="position: fixed; width: 500px; margin: 1% auto; left:0; right: 0; top: 0; z-index: 5000;">
        {{ Session::get('message') }}
      </div>
      @endif
      <!-- Alert message (end) -->

      @if($slot ?? false)
      {{ $slot }}
      @else
      @yield('content')
      @endif
    </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    @yield('control-sidebar')
  </aside>

  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
  </a>
  {{-- @include('layouts.main-footer') --}}
  </div>


  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> <!-- jQuery -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> <!-- Bootstrap 4 -->
  @yield('plugins-script')
  <script src="{{ asset('vendor/adminlte/js/adminlte.min.js?v=3.2.0') }}"></script> <!-- AdminLTE Theme Style -->
  <script>
    // Get the button
    let mybutton = document.getElementById("back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    $(document).ready(function() {
        var controlSidebar = $('.control-sidebar');
        var hasContent = controlSidebar.html().trim().length > 0;

        if (!hasContent) {
            // Hide the nav-item containing the control-sidebar
            $('[data-widget="control-sidebar"]').closest('.nav-item').hide();
        }

        $('#back-to-top').hide();
    });
  </script>
  @yield('script')
  @livewireScripts
</body>
</html>
