@extends('frontend.layouts.app')
@section('title')
    {{ tr('Contact') }}
@endsection
@section('content')

    {{-- address start --}}
    {{ $contact->address ?? '' }}
    {{-- address end --}}

    {{-- phone start --}}
    {{ $contact->phone ?? '' }}
    {{-- phone end --}}

    {{-- fax start --}}
    {{ $contact->fax ?? '' }}
    {{-- fax end --}}

    {{-- email start --}}
    {{ $contact->email ?? '' }}
    {{-- email end --}}

    {{-- reception start --}}
    {{ $contact->reception ?? '' }}
    {{-- reception end --}}

    {{-- working_time start --}}
    {{ $contact->working_time ?? '' }}
    {{-- working_time end --}}

    {{-- lunch start --}}
    {{ $contact->lunch ?? '' }}
    {{-- lunch end --}}

    {{-- weekend start --}}
    {{ $contact->weekend ?? '' }}
    {{-- weekend end --}}

    {{-- transport start --}}
    {{ $contact->transport ?? '' }}
    {{-- transport end --}}

    {{-- landmark start --}}
    {{ $contact->landmark ?? '' }}
    {{-- landmark end --}}

    {{-- chancellery start --}}
    {{ $contact->chancellery ?? '' }}
    {{-- chancellery end --}}

    {{-- hr_department start --}}
    {{ $contact->hr_department ?? '' }}
    {{-- hr_department end --}}

    {{-- press_service start --}}
    {{ $contact->press_service ?? '' }}
    {{-- press_service end --}}

    {{-- support start --}}
    {{ $contact->support ?? '' }}
    {{-- support end --}}
@endsection

@push('front-js')
    <script>
        var latitude = <?= $contact->latitude ?>;
        var longitude = <?= $contact->longitude ?>;
    </script>
@endpush
