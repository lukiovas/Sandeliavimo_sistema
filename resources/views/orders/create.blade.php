@extends ('layouts.app')


@section ('content')
    <a class="btn btn-default" href="/Sandeliavimo_sistema/public/orders">Go back</a>
    <h1>New order</h1>
    <table class="table">
            
            <tr>
            <th>Order ID</th>
                <th>Order date</th>
                <th>Customer ID</th>
                <th>Empoyee ID</th>
            </tr>
            <div class="form-group">
            
    {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST' , "class" => "form"]) !!}
 
            <tr>
                    <td>     {{Form::text('order_id', $order->order_id, ['class' => 'form-control', 'placeholder' =>'Order ID'])}}
                        </td> 
                    <td>    {{Form::text('order_date', $order->order_date, ['class' => 'form-control', 'placeholder' =>'Order date'])}}
                        </td>
                    <td>    {{Form::text('customer_id', $order->customer_id, ['class' => 'form-control', 'placeholder' =>'Customer ID'])}}
                        </td>
                    <td>    {{Form::select('employee_id', DB::table('users')->distinct()->get() , ['class' => 'form-control', 'placeholder' =>'Employee ID'])}}
                        </td>
            </tr>
            
             
        </table> 
        {{ Form::submit('Create Order', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
         </div>
    
@endsection