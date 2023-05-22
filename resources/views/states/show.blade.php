@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <div class="mb-3">
                    <label for="countryid" class="form-label">Country</label>
                    <select class="form-select" id="countryid" disabled>
                        <option selected disabled>{{ $state->countries->name }}</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">State Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $state->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">State Code</label>
                    <input type="text" class="form-control" id="code" value="{{ $state->code }}" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection