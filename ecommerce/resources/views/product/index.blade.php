@extends('base')
@section('title','Products')
    
@section('content')
<h1>Product list</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        

       
        @forelse ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->price}} MAD</td>
            <td>|Actions</td>

        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">
                <h3>No Products</h3>

            </td>
        </tr>
            
        
        @endforelse
         
    </tbody>
</table>
@endsection