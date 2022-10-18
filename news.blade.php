@extends('frontend.layouts.app')
@section('title')
    {{ $category->title }}
@endsection

@section('content')

    @foreach($lists as $list)
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

        {{-- route category list start --}}
        {{ route('category', $list->category_slug) }}
        {{-- route category list end --}}

        {{-- route detail start --}}
        {{ route('news', $list->slug) }}
        {{-- route detail end --}}

        {{-- list anons_image start --}}
        <img src="{{ $list->anons_image ?? ''}}" alt="{{ $list->list_title ?? '' }}">
        {{-- list anons_image end --}}

        {{-- list count view start --}}
        {{ displayDateOnly($list->count_view) }}
        {{-- list count view end --}}

        {{-- list date start --}}
        {{ displayDateOnly($list->date) }}
        {{-- list date end --}}

    @endforeach

    {{-- list paginate start --}}
    {{ $lists->links('frontend.layouts.pagination') }}
    {{-- list paginate start --}}
@endsection
