@extends ('layouts.pageLayout')
<?php $logged = true; ?>

@section ('content')
    <a class="btn btn-default" href="/Sandeliavimo_sistema/public/products">Go back</a>
    <h1>{{$product->product_name}}</h1>
<small>Last edited : {{$product->updated_at}}</small>
    <table class="table">
            <tr>
                    <th>ID</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Unit Price / Eur</th>
                    <th>Quantity</th>
                    <th>Category id</th>
                </tr>
                {!! Form::open(['action' => ['ProductsController@update' , $product->product_id], 'method' => 'POST' , "class" => "form"]) !!}
                <div class="form-group">
            <tr>
                    <td>     <p>{{$product->product_id}}</p>
                        </td> 
                    <td>    {{Form::text('product_code', $product->product_code, ['class' => 'form-control', 'placeholder' =>'Product code'])}}
                        </td>
                    <td>    {{Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' =>'Product name'])}}
                        </td>
                    <td>    {{Form::text('description', $product->description, ['class' => 'form-control', 'placeholder' =>'Description'])}}
                        </td>
                    <td>    {{Form::text('unit_price', $product->unit_price, ['class' => 'form-control', 'placeholder' =>'Unit price'])}}
                        </td>
                    <td>    {{Form::text('quantity', $product->quantity, ['class' => 'form-control', 'placeholder' =>'Quantity'])}}
                        </td>
                    <td>    {{Form::text('category_id', $product->category_id, ['class' => 'form-control', 'placeholder' =>'Category id'])}}
                        </td>
            </tr>
            </table>   
            {{Form::hidden('_method','PUT')}}
            {{ Form::submit('Edit product', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            {!! Form::open(['action' => ['ProductsController@destroy' , $product->product_id], 'method' => 'POST', 'class' => 'btn']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Remove', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </table>   
@endsection