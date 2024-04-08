<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titlePage = "Categories || Show";
        $cate = Category::all();
        return view("admin.category",compact("titlePage","cate"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titlePage = "Categories || Create";
        
        return view("admin.create_category",compact("titlePage",));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Category::create($request->all());
        return redirect()->route("Category.index");
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
    public function edit($id_category)
    {
        //
        $titlePage = "Categories || Edit";
        $cate = Category::find($id_category);
        return view("admin.edit_category",compact("titlePage","cate"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_category)
    {
        //
        Category::find($id_category)->update($request->all());
        return redirect()->route("Category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_category)
    {
        //
        Category::destroy($id_category);
        return redirect()->route("Category.index");
    }
}
