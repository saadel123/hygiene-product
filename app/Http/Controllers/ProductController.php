<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::latest()->paginate(6);
        $categories = Category::all();
        return view('products.categories')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::latest()
            ->whereSlug($id)
            ->with('products')
            ->get();

        return view('products.produits', ['category' => $category, 'categories' => Category::all()]);
    }

    public function showProduct($category = null, $slug)
    {
        $product = Product::latest()
            ->whereSlug($slug)
            // ->with('products')
            ->first();
        $list_produits = Product::latest()
            ->whereCategoryId($product->category_id)
            ->get();

        return view('products.details-produit', ['product' => $product, 'categories' => Category::all(), 'list_produits' => $list_produits, 'name_cat' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
