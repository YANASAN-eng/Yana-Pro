<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <title>9-1 GIFアニメーション</title>
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    @yield('stylesheet')
    <style>
        body{
            margin: 0;
        }
        .main{
            margin-top: 60px;
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
    @yield('header')
    @yield('main')
    @yield('footer')
    @yield('script')
</body>
