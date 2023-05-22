@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row gy-3 justify-content-end">
        <div class="col-md-10">
            @if ($message = Session::get('success'))
            <div class="alert alert-success w-100">
                <p class="mb-0">{{ $message }}</p>
            </div>
            @endif
        </div>
        <div class="col-md-2 text-end">
            <a href="{{ route('category.create') }}" class="btn btn-secondary">
                Create Category
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">S.No</th>
                    <th scope="col">Category Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <th scope="row" class="text-center">{{ ++$i }}</th>
                    <td>{{ $category->name }}</td>
                    <td class="text-end">
                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                            <a href="{{ route('category.show',$category->id) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-success">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $categories->links() !!}
    </div>
</div>

@endsection