@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Country Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $country->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Country code</label>
                    <input type="text" class="form-control" id="code" name="code" value="{{ $country->code }}" disabled>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection