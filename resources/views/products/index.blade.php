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
            <a href="{{ route('products.create') }}" class="btn btn-secondary">
                Create Product
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">S.No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row" class="text-center">{{ ++$i }}</th>
                    <td>{{ $product->categories->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td class="text-end">
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a href="{{ route('products.show',$product->id) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-sm btn-success">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->links() !!}
    </div>
</div>

@endsection