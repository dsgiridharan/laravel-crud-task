@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{route('states.update',$state->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="countryid" class="form-label">country</label>
                        <select class="form-select" id="countryid" aria-label="Default select example" name="country_id" ">
                            @foreach($countries as $country)
                            <option value=" {{ $country->id }}"{{ ( $state->country_id == $country->id ) ? 'selected'
                            : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">State Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$state->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">State Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{$state->code}}">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Create State</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection