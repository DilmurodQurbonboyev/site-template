@extends('frontend.layouts.app')
@section('title')
    {{ $list->category_title ?? '' }}
@endsection
@section('content')
    {{-- category title start --}}
    {{ $list->category_title ?? '' }}
    {{-- category title end --}}

    {{-- body image start --}}
    @if($list->body_image)
            <?php
            if (!empty($list->body_image) && is_array(explode(',', $list->body_image))) {
                $bodyImages = explode(',', $list->body_image);
            }
            ?>
        @foreach ($bodyImages as $i)
            @if ($i)
                <div class="item">
                    <div class="page-owl-img">
                        <img
                            src="{{ $i }}" alt="{{ $list->title ?? '' }}">
                    </div>
                </div>
            @endif
        @endforeach
    @endif
    {{-- body image end --}}

    {{-- list title start --}}
    <h1>
        {{ $list->list_title ?? '' }}
    </h1>
    {{-- list title end --}}

    {{-- list description start --}}
    <h3>
        {{ $list->list_description ?? '' }}
    </h3>
    {{-- list description end --}}

    {{-- list content start --}}
    <h5>
        {!! $list->list_content ?? '' !!}
    </h5>
    {{-- list content end --}}

    {{-- list date start --}}
    {{ displayDateOnly($list->date) }}
    {{-- list date end --}}

    {{-- list pdf start --}}
    @if($list->pdf)
        <div class="pdf">
            @if($list->pdf_type == 2)
                <div class="pdf-out">
                    <div class="pdf-left">
                        <a href="{{ $list->pdf ?? '' }}" download="{{ $list->pdf ?? '' }}">
                            <img src="{{ asset('img/pdf.png') }}">
                        </a>
                    </div>
                    <div class="pdf-right">
                        <div class="pdf-name">
                            <span>{{ $list->pdf_title ?? '' }}</span>
                        </div>
                        <div class="pdf-download">
                            <a href="{{ $list->pdf ?? '' }}"
                               download="{{ $list->pdf ?? '' }}">{{ tr('Download') }}</a>
                        </div>
                    </div>
                </div>
            @endif
            @if($list->pdf_type == 1)
                <div class="pdf-in">
                    <div class="row justify-content-center">
                        <div class="col-xxl-12">
                            <iframe
                                src="{{ $list->pdf ?? '' }}"
                                style="width: 100%; height:600px;"></iframe>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endif
    {{-- list pdf end --}}

    {{-- share start --}}
    <div class="page-share">
        <a href="https://telegram.me/share/url?url={{ url()->current() }}">
            <img src="{{ asset('img/stel.png') }}">
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}">
            <img src="{{ asset('img/stwi.png') }}">
        </a>
        <a href="https://www.instagram.com/sharer.php?u={{ url()->current() }}">
            <img src="{{ asset('img/sins.png') }}">
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}">
            <img src="{{ asset('img/sfac.png') }}">
        </a>
    </div>
    {{-- share pdf end --}}
@endsection
