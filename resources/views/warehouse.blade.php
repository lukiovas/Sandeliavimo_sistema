@extends('layouts.app')

@section('content')
<div class="container">
    <div class="heading">
    <h2>Warehouse</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table ">
                            <tr>
                                    <th>ID</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Unit Price / Eur</th>
                                    <th>Quantity</th>
                                    <th></th>
                             </tr>
                        @if(count($products) >0)
                             @foreach($products as $product)
                             <tr>
                                    <td>{{$product->product_id}}</td> 
                                    <td>{{$product->product_code}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->description}}</td>
                                     <td>{{$product->unit_price}}</td>
                                     <td>{{$product->quantity}}</td> 
                             <td><a href="/Sandeliavimo_sistema/public/products/{{$product->product_id}}" class="btn btn-default"> View product</a></td>
                             </tr>
                             @endforeach
                         @endif
                    </table>
        </div>
    </div>
</div>
@endsection
