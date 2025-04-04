<!DOCTYPE html>
<html class="font-sans" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta robots="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
  @vite('resources/css/app.css')

  <title>{{ env('APP_NAME') }}</title>
</head>

<body class="bg-khaki">
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
</body>

</html>
