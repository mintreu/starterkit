<x-layout.config.extender>
{{--Head Defination--}}
@section('layout_keyword'){{ $layout['keyword']}}@endsection
@section('layout_description'){{ $layout['description']}}@endsection
@section('layout_title'){{ $layout['title']}}@endsection
@section('layout_favicon'){{ asset($layout['favicon']) }}@endsection

{{--Body Definations--}}
@section('layout_body_class')class="{{ $layout['bodyClass']}}"@endsection
{{--Main Display Section--}}
</x-layout.config.extender>
