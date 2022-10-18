@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')

    {{-- category title start --}}
    {{ $category->title ?? '' }}
    {{-- category title end --}}


    @foreach($lists as $list)
        {{-- #collapse-{{$list->id}}--}}

        {{-- list title start --}}
        {{ $list->list_title ?? '' }}
        {{-- list title start --}}

        {{-- list description start --}}
        {{ $list->list_description ?? '' }}
        {{-- list description start --}}

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

        {{-- list content start --}}
        {!! $list->list_content ?? '' !!}
        {{-- list content start --}}

        {{-- list paginate start --}}
        {{ $lists->links('frontend.layouts.pagination') }}
        {{-- list paginate start --}}
    @endforeach
@endsection
