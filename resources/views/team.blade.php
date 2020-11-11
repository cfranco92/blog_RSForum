{{-- Developed by Cristian Franco Bedoya --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($data as $item)
                <h1>    
                    {{ __('team10.productName') }} {{ $item[0]['productName'] }}
                </h1>  
                <li>
                    {{ __('team10.productId') }} {{ $item[0]['productId'] }}
                </li>              
                <li>
                    {{ __('team10.productPrice') }} {{ $item[0]['productPrice'] }}
                </li>        
                <li>
                    {{ __('team10.productDescription') }} {{ $item[0]['productDescription'] }}
                </li>        
                <li>
                    {{ __('team10.productDetails') }} {{ $item[0]['productDetails'] }}
                </li>        
                <li>
                    {{ __('team10.productCatalogueId') }} {{ $item[0]['productCatalogueId'] }}
                </li>        
                <li>
                    {{ __('team10.productCatalogueName') }} {{ $item[0]['productCatalogueName'] }}
                </li>        
            @endforeach()
        </div>
    </div>
</div>
@endsection
