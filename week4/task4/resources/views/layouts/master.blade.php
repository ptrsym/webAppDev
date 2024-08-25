<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{asset('css/wp.css')}}">
</head>

<body>
    {{-- this is a default value for the parent that will display user unless 'name' is passed --}}
    <h1>Greetings @section ('name') user @show</h1>

    @yield('content')

    {{-- if you want to define a footer in the layouts directory--}}
    @include('layouts.footer')
</body>
</html>

