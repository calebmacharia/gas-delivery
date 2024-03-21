<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class  ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();

        return view('admin/product/index',['products'=>$products]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.order');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',

        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.create')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('/admin/product/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //dd($request);
        $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|numeric',

    ]);

    $product->update($request->all());

    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success','Product deleted successful!');
    }

}
