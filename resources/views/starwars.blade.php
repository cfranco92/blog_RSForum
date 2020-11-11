{{-- Developed by Cristian Franco Bedoya --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($data as $item)
                    <h1>
                        {{ __('starwars.name') }} {{ $item['name'] }}
                    </h1>
                    <li>
                        {{ __('starwars.height') }} {{ $item['height'] }}
                    </li>
                    <li>
                        {{ __('starwars.mass') }} {{ $item['mass'] }}
                    </li>
                    <li>
                        {{ __('starwars.hair_color') }} {{ $item['hair_color']}}
                    </li>
                    <li>
                        {{ __('starwars.eye_color') }} {{ $item['eye_color']}}
                    </li>
            @endforeach()
        </div>
    </div>
</div>
@endsection
