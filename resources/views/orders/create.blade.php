@extends ('layouts.app')


@section ('content')
    <a class="btn btn-default" href="/Sandeliavimo_sistema/public/orders">Go back</a>
    <h1>New order</h1>
    <table class="table">
            
            <tr>
            <th>Order ID</th>
                <th>Order date</th>
                <th>Products</th>
                <th>Customer ID</th>
                <th>Empoyee ID</th>
            </tr>
            <div class="form-group">
            
    {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST' , "class" => "form"]) !!}

            <tr>
                    <td>    {{Form::text('order_id', '', ['class' => 'form-control', 'placeholder' =>'Order ID'])}}
                        </td> 
                    <td>    {{Form::date('order_date', Carbon\Carbon::now(), ['class' => 'form-control'])}}
                        </td>
                    <td>    {{Form::select('products', DB::table('products')->distinct()->pluck('product_name','product_id') , ['class' => 'form-control mdb-select md-form colorful-select dropdown-primary'], array('multiple' => true))}}
                        </td>
                    <td>    {{Form::text('customer_id', '', ['class' => 'form-control', 'placeholder' =>'Customer ID'])}}
                        </td>
                    <td>    {{Form::select('employee_id', DB::table('users')->distinct()->pluck('name','id')->toArray() , ['class' => 'form-control'])}}
                        </td>
            </tr>
             
        </table> 
        {{ Form::submit('Create Order', ['class'=>'btn-save btn btn-primary btn-sm'])}}
            {!! Form::close() !!}
         </div>
    
@endsection