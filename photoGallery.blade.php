@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection

@section('content')
    {{-- category title start --}}
    {{ $category->title ?? '' }}
    {{-- category title end --}}

    @foreach($lists as $list)
        <a data-fancybox="gallery-{{$list->id}}"
           data-src="{{$list->anons_image ?? ''}}">
            <img src="{{$list->anons_image ?? ''}}" alt="{{ $list->list_title ?? '' }}">
            {{ $list->list_title ?? '' }}
        </a>
            <?php
            if (!empty($list->body_image) && is_array(explode(',', $list->body_image))) {
                $bodyImages = explode(',', $list->body_image);
            }
            ?>
        @foreach ($bodyImages as $i)
            @if ($i)
                <a class="d-none" data-fancybox="gallery-{{$list->id}}"
                   data-src="{{ $i }}">
                    <img src="{{ $i }}" alt="{{ $i }}"/>
                </a>
            @endif
        @endforeach
    @endforeach
    {{-- list paginate start --}}
    {{ $lists->links('frontend.layouts.pagination') }}
    {{-- list paginate start --}}
@endsection
