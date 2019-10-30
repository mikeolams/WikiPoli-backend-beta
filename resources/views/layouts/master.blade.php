<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'WikiPoli | Welcome') }} - @yield('title')</title>
  <meta name="theme-color" content="#333" />
    {{--  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>  --}}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="app/styles/index.css">
  <link rel="icon" type="img/png" href="images/favicon.png">
  <link rel="manifest" href="app/js/manifest.json" />

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
   {{-- //inline styles --}}
    @yield('styles')
    
</head>
<body>
    
    {{-- //sidebar --}}
    
    {{-- @auth --}}
       @yield('sidebar') 
    {{-- @endauth --}}

{{-- //top navigation bar --}}
    @yield('header')

    @yield('content')

    @yield('footer')

    {{-- //scripts --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="app/scripts/index.js"></script>
  <script src="app/js/app.js"></script>
   {{-- // inline scrpt --}}
   @yield('script')
</body>
</html>
