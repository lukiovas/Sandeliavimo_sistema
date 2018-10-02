<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $orders = Order::orderBy('order_date','asc')->paginate(10);
        return view('orders.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'order_id' => 'required',
            'order_date' => 'required',
        ]);

        // Create new product
        $order = New Order();
        
            $order->order_id = $request->input('order_id');
            $order->order_date = time();
            $order->customer_id = $request->input('customer_id');
            $order->employee_id = $request->input('employee_id');
            $order->products = $request->input('products');
            $order->save();

            return redirect('/orders')->with('success' , 'Order created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.show')->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Update product
        $order = Order::find($id);
        
        $order->order_date = $request->input('order_date');
        $order->customer_id = $request->input('customer_id');
        $order->employee_id = $request->input('employee_id');
        $order->products = $request->input('products');
        $order->save();

        return redirect('/orders')->with('success' , 'Order updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders')->with('success' , 'Order removed');
    }
}
