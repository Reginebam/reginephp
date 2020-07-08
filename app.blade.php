<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/css/style1.css')}}" rel="stylesheet">
    {{-- <title>@yield('title')</title>
    @include('includes.styles')
    @yield('css') --}}
</head>

<body>
    {{-- <div id="preloader"></div> --}}
    @include('partials.navbar1')


    @yield('contenta')

    @include('partials.footer')

  {{-- @include('includes.script') --}}

    {{-- @yield('js')  --}}
    
</body>

</html>