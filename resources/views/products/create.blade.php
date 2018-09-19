@extends ('layouts.app')


@section ('content')
    <a class="btn btn-default" href="/Sandeliavimo_sistema/public/products">Go back</a>
    <h1>New product</h1>
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
            <div class="form-group">
            
    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST' , "class" => "form"]) !!}
 
            <tr>
                    <td>    {{Form::text('product_id', '', ['class' => 'form-control', 'placeholder' =>'Product id'])}}
                        </td> 
                    <td>    {{Form::text('product_code', '', ['class' => 'form-control', 'placeholder' =>'Product code'])}}
                        </td>
                    <td>    {{Form::text('product_name', '', ['class' => 'form-control', 'placeholder' =>'Product name'])}}
                        </td>
                    <td>    {{Form::text('description', '', ['class' => 'form-control', 'placeholder' =>'Description'])}}
                        </td>
                    <td>    {{Form::text('unit_price', '', ['class' => 'form-control', 'placeholder' =>'Unit price'])}}
                        </td>
                    <td>    {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' =>'Quantity'])}}
                        </td>
                    <td>    {{Form::text('category_id', '', ['class' => 'form-control', 'placeholder' =>'Category id'])}}
                        </td>
            </tr>
            
              </div>
        </table> 
        {{-- {{ $user_id = DB::table('users')->select('id')->get() }}
            {{DB::table('products')->insert(
               'user_id' => $user_id 
            )}} --}}
        {{ Form::submit('Create product', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        
    
@endsection