{{--@extends('layout.app')--}}
<x-layout.app-layout>
{{-- HEAD SECTION --}}
@section('layout_head')
    <meta name="keyword" content="@yield('layout_keyword')" />
    <meta name="description" content="@yield('layout_description')" />
    {{--Layout Title--}}
    <title>@yield('layout_title')</title>
    {{--Layout Favicon--}}
    <link rel="icon" type="image/png" href="@yield('layout_favicon')" />
    <!-- App Style -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    {{-- STYLESHEET SECTION --}}
    @stack('stylesheet')
    @stack('style')
    <livewire:styles />
    @stack('doc_head_extra')
@endsection
{{-- BODY SECTION--}}
@section('layout_body')
    {{-- DISPLAY SECTION--}}
    @yield('display')
    {{-- JAVASCRIPT SECTION --}}
    <livewire:scripts />
    <!-- App Script -->
    <script src="{{ asset('js/app.js')}}"></script>
    @stack('javascript')
    @stack('script')
@endsection
@section('layout_after_body')
    @stack('after_body')
@endsection
</x-layout.app-layout>
