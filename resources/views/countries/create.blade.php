@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{route('country.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Country Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Country Code</label>
                        <input type="text" class="form-control" id="code" name="code">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Create Country</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection