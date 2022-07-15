<x-layout.layout>
    @section('pre-content')
        <div class="bg-gray-100" style="min-height: 192px;">
        @include('mintreu.themes.guest-panel.components.guest.navbar')
    @endsection

    @section('post-content')
{{--        @include('mintreu.themes.guest-panel.components.guest.footer')--}}
         </div>
    @endsection
</x-layout.layout>
