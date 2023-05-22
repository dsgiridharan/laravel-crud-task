@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-10">
            @if($message=Session::get('success'))
            <div class="alert alert-success w-100">
                <p class="mb-0">{{$message}}</p>
            </div>
            @endif
        </div>
        <div class="col-md-2 text-end">
            <a href="{{route('states.create')}}" class="btn btn-secondary">Create State</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="tabel-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">State Name</th>
                        <th scope="col">State Code</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($states as $state)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$state->name}}</td>
                        <td>{{$state->code}}</td>
                        <td class="text-end">
                            <form action="{{route('states.destroy',$state->id)}}" method="POST"
                                onsubmit="return confirm('Are You Sure');">
                                <a href="{{route('states.show',$state->id)}}" class="btn btn-sm btn-primary">Show</a>
                                <a href="{{route('states.edit',$state->id)}}" class="btn btn-sm btn-success">Edit</a>
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection