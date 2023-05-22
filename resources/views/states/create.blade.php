@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{route('states.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="countryid" class="form-label">Country Name</label>
                        <select class="form-select" id="countryid" name="country_id" value="">
                            <option selected disabled>Choose your Country</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">State Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">State Code</label>
                        <input type="text" class="form-control" id="code" name="code">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Create State</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection