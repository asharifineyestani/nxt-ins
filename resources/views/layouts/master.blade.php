<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <title>افرانکست</title>
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="${props.base}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,900&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rtl.css') }}">
</head>

<body class="no-scroll-bar">

@include('layouts.header')
@include('layouts.sidenav')

@yield('content')


@include('layouts.footer')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/main-scripts.js') }}"></script>
<script>
    AOS.init();
</script>
</body>
</html>
