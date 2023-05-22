@extends('layouts.app')

@section('content')

<div class="container mt-5" id="welcome">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('category.index') }}" class="card p-3">
                <h4>{{$categoryCount}}</h4>
                <p>Categories</p>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.index') }}" class="card p-3">
                <h4>{{$productCount}}</h4>
                <p>Products</p>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('country.index') }}" class="card p-3">
                <h4>{{$countryCount}}</h4>
                <p>Countries</p>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('states.index') }}" class="card p-3">
                <h4>{{$stateCount}}</h4>
                <p>States</p>
            </a>
        </div>
    </div>
</div>

@endsection