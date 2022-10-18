@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection

@section('content')

    {{-- category title start --}}
    {{ $category->title ?? '' }}
    {{-- category title end --}}

    @foreach($lists as $list)
        @if($list->media_type == 5)
            <a data-fancybox="video-gallery"
               href="https://youtu.be/{{ $list->video_code ?? '' }}">
                <img src="{{ $list->image ?? '' }}" alt="{{ $list->list_title ?? '' }}">
                {{ $list->list_title ?? '' }}
            </a>
        @endif
        @if($list->media_type == 3)
            <a data-fancybox="video-gallery"
               href="{{ $list->video ?? '' }}">
                <img src="{{ $list->image ?? '' }}" alt="{{ $list->list_title ?? '' }}">
                {{ $list->list_title ?? '' }}
            </a>
        @endif
        @if($list->media_type == 4)
            <a data-fancybox data-type="iframe"
               href="https://utube.uz/embed/{{ $list->video_code }}">
                <img src="{{ $list->image ?? '' }}" alt="{{ $list->list_title ?? '' }}">
                {{ $list->list_title ?? '' }}
            </a>
        @endif
    @endforeach
    {{-- list paginate start --}}
    {{ $lists->links('frontend.layouts.pagination') }}
    {{-- list paginate start --}}
@endsection
