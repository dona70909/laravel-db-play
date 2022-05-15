<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}"> 
    <title>Movies - @yield('title')</title>
</head>
<body>
    @include('partials.header.header')
    @include('partials.main.main')
</body>
</html>