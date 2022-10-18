@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')

    {{-- category title start --}}
    {{ $category->title ?? '' }}
    {{-- category title end --}}

    @foreach($lists as $list)

        @if($list->pdf)
            <a href="{{ $list->pdf }}">
                <img
                    src="{{ file_extension($list->pdf) == 'pdf' ? asset('img/pdf.png') : asset('img/file.png') }}"
                    alt="{{ $list->list_title ?? '' }}">
            </a>
        @endif
        <a href="{{ $list->pdf }}">{{ $list->list_title ?? '' }}</a>
        @if($list->pdf)
            {{ filesize_formatted($list->pdf) }}
        @endif
        @if($list->pdf)
            <a href="{{ $list->pdf }}">{{ tr('Show') }}</a>
        @endif
    @endforeach

    {{-- list paginate start --}}
    {{ $lists->links('frontend.layouts.pagination') }}
    {{-- list paginate start --}}
@endsection
