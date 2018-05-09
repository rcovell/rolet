<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4456678-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-4456678-3');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    @hasSection('description')
      <meta name="description" content="@yield('description')">
    @endif
    @hasSection('keywords')
      <meta name="keywords" content="@yield('keywords')">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rolet') }} | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link href="/css/app.css?asdf22" rel="stylesheet">
    @yield('page-styles')
    <script>
      window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
      ]); ?>
    </script>
  </head>
  <body class="@yield('body_class')">
    <div id="app">
      <div class="page-overlay" style="display:none;" v-show="showingMobileNavigation" @click="toggleMobileNavigation()"></div>
      @include ('partials.primary-navigation')

      <div class="content">
        @yield('content')
      </div>

      @include ('partials.footer')

      {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
          <div class="top-right links">
            @auth
              <a href="{{ url('/home') }}">Home</a>
            @else
              <a href="{{ route('login') }}">Login</a>
              <a href="{{ route('register') }}">Register</a>
            @endauth
          </div>
        @endif
      </div> --}}
    </div>

    <script defer src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script defer src="/js/custom.js"></script>
    @if (Request::is('*/questionnaire') || Request::is('company/contact'))
      <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
    @endif

    @yield('page-js-files')
    @yield('page-js-script')
  </body>
</html>
