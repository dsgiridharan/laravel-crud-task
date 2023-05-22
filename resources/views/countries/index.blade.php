@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-10">
            @if ($message = Session::get('success'))
            <div class="alert alert-success w-100">
                <p class="mb-0">{{ $message }}</p>
            </div>
            @endif
        </div>
        <div class="col-md-2 text-end">
            <a href="{{ route('country.create') }}" class="btn btn-secondary">Create Country</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="tabel-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Country Name</th>
                        <th scope="col">Country Code</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{$country->name}}</td>
                        <td>{{$country->code}}</td>
                        <td class="text-end">
                            <form action="{{route('country.destroy',$country->id)}}" method="POST"
                                onsubmit="return confirm('Are You Sure?');">
                                <a href="{{route('country.show',$country->id)}}" class="btn btn-sm btn-primary">Show</a>
                                <a href="{{route('country.edit',$country->id)}}" class="btn btn-sm btn-success">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
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