@extends ('layouts.pageLayout')
<?php $logged = true; ?>

@section ('content')
    <h1>Products</h1>
    <table class="table">
        <tr>
                <th>ID</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Unit Price / Eur</th>
                <th>Quantity</th>
                <th></th>
            </tr>
    @if (count($products) >= 1)
    <div class="well">
        @foreach($products as $product)
                <tr>
                    <td>{{$product->product_id}}</td> 
                    <td>{{$product->product_code}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->description}}</td>
                     <td>{{$product->unit_price}}</td>
                     <td>{{$product->quantity}}</td> 
                <td><a href="/Sandeliavimo_sistema/public/products/{{$product->product_id}}">Edit</a></td> 
                </tr>          
        @endforeach      
    </div>
</table>

    {{$products->links()}}

    @else
        <p>No products found</p>
    @endif
    <a href="/Sandeliavimo_sistema/public/products/create">Create new product</a>
@endsection