<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titlePage = "Product || Show";
        $products = Product::all();
        return view("admin.product",compact("titlePage","products",));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titlePage = "Product || Create";
        
        return view("admin.create_product",compact("titlePage",));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Product::create($request->all());
        $request->validate([
            'img_product' => 'file|max:10240',
        ]);
        $file = $request->file('img_product');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('img'), $fileName);
        return redirect()->route("Product.index");
    }

    /**
     * Display the specified resource.
     */
    // public function show(products $products)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_product)
    {
        //
        $titlePage = "Product || Edit";
        $product = Product::find($id_product);
        return view("admin.edit_product",compact("titlePage","product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_product)
    {
        Product::find($id_product)->update($request->all());
        return redirect()->route("Product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_product)
    {
        //
        Product::destroy($id_product);
        return redirect()->route("Product.index");
    }

 
}
