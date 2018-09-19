@extends ('layouts.app')


@section ('content')
    <a class="btn btn-default" href="/Sandeliavimo_sistema/public/orders">Go back</a>
    <h1>{{'Order nr.' . $order->order_id}}</h1>
<small>Last edited : {{$order->updated_at}}</small>
    <table class="table">
            <tr>
                <th>Order ID</th>
                <th>Order date</th>
                <th>Customer ID</th>
                <th>Empoyee ID</th>
            </tr>
                {!! Form::open(['action' => ['OrdersController@update' , $order->order_id], 'method' => 'POST' , "class" => "form"]) !!}
                <div class="form-group">
            <tr>
                    <td>     <p>{{$order->order_id}}</p>
                        </td> 
                    <td>    {{Form::text('order_date', $order->order_date, ['class' => 'form-control', 'placeholder' =>'Order date'])}}
                        </td>
                    <td>    {{Form::text('customer_id', $order->customer_id, ['class' => 'form-control', 'placeholder' =>'Customer ID'])}}
                        </td>
                    <td>    {{Form::select('employee_id', DB::table('users')->distinct()->get() , ['class' => 'form-control', 'placeholder' =>'Employee ID'])}}
                        </td>
            </tr>
            </table>   
            {{Form::hidden('_method','PUT')}}
            {{ Form::submit('Edit Order', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            {!! Form::open(['action' => ['OrdersController@destroy' , $order->order_id], 'method' => 'POST', 'class' => 'btn']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Remove', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </table>   
@endsection