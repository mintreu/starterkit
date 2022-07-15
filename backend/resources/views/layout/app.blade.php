<!doctype html>
<html @yield('layout_DocHead_HtmlClass') lang="{{ app()->getLocale() }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@yield('layout_head')
</head>
<body @yield('layout_body_class')>
@yield('layout_body')
</body>
@stack('layout_after_body')
</html>
