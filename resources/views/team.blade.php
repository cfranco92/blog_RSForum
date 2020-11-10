{{-- Developed by Cristian Franco Bedoya --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($data as $item)
                    {{ $item }}
            @endforeach()
        </div>
    </div>
</div>
@endsection
