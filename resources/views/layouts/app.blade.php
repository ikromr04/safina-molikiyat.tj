<!DOCTYPE html>
<html class="page" lang="{{ config('app.locale') }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex, nofollow">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
  <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  @vite('resources/css/app.css')

  <title>{{ env('APP_NAME') }}</title>
</head>

<body class="page__body no-scrollbar" id="top">
  @include('layouts.icons')

  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <script src="https://unpkg.com/lottie-web@latest/build/player/lottie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  @vite('resources/js/app.js')
  @viteReactRefresh
  @vite('resources/js/forms.jsx')
</body>

</html>
