<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::orderBy('category_id','asc')->paginate(10);
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'product_code' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
        ]);

        // Create new product
        $product = New Product();
        
            $product->product_id = $request->input('product_id');
            $product->product_code = $request->input('product_code');
            $product->product_name = $request->input('product_name');
            $product->description = $request->input('description');
            $product->unit_price = $request->input('unit_price');
            $product->quantity = $request->input('quantity');
            $product->category_id = $request->input('category_id');
            $product->save();

            return redirect('/products')->with('success' , 'Product created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
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
        $this->validate($request, [
            'product_code' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
        ]);

        // Create new product
            $product = Product::find($id);
        
            $product->product_code = $request->input('product_code');
            $product->product_name = $request->input('product_name');
            $product->description = $request->input('description');
            $product->unit_price = $request->input('unit_price');
            $product->quantity = $request->input('quantity');
            $product->category_id = $request->input('category_id');
            $product->save();

            return redirect('/products')->with('success' , 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success' , 'Product removed');
    }
}
