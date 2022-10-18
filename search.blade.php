@extends('frontend.layouts.app')
@section('title')
    {{ tr('Search') }}
@endsection
@section('content')
    @forelse ($lists as $list)

        {{-- list title start --}}
        {{ $list->list_title ?? '' }}
        {{-- list title end --}}

        {{-- list description start --}}
        {{ $list->list_description ?? '' }}
        {{-- list description end --}}

        {{-- route detail start --}}
        {{ route($list->list_type_id == '1' ? 'news' : 'pages', $list->slug) }}
        {{-- route detail start --}}
    @empty
        {{ tr('No result found') }}...
    @endforelse

    {{-- list paginate start --}}
    {{ $lists->links('frontend.layouts.pagination') }}
    {{-- list paginate start --}}
@endsection
