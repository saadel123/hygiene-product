<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function show($slug)
    {

        $category = Category::whereSlug($slug)->with('products')->firstOrFail();

        return view('products.produits', ['category' => $category, 'categories' => Category::all()]);
    }

    public function showProduct($category = null, $slug = null)
    {
        $product = Product::whereSlug($slug)
            ->firstOrFail();
        $relatedProducts = $product->category->products()->where('id', '!=', $product->id)->get();

        // Set SEO metadata
        SEOTools::setTitle(Str::limit($product->title_fr, 60, ''));
        SEOTools::setDescription(Str::limit($product->meta_description, 150, '...'));
        SEOTools::metatags()->addMeta('article:published_time', $product->created_at->toW3CString(), 'property');
        SEOTools::metatags()->addMeta('article:section', 'products');
        SEOTools::metatags()->addKeyword([$product->meta_keywords]);

        // Set Open Graph metadata
        SEOTools::opengraph()->setTitle(Str::limit($product->title_fr, 60, ''));
        SEOTools::opengraph()->setDescription(Str::limit($product->meta_description, 150, '...'));
        SEOTools::opengraph()->setUrl(config('app.url'));
        SEOTools::opengraph()->setType('product');
        SEOTools::opengraph()->setArticle([
            'published_time' => $product->created_at,
            'modified_time' => $product->updated_at,
        ]);
        SEOTools::opengraph()->addImage(Voyager::image($product->image), ['height' => 300, 'width' => 300]);

        // Set JSON-LD metadata
        SEOTools::jsonLd()->setTitle(Str::limit($product->title_fr, 60, ''));
        SEOTools::jsonLd()->setDescription(Str::limit($product->meta_description, 150, '...'));
        SEOTools::jsonLd()->setType('Product');

        return view(
            'products.details-produit',
            ['product' => $product, 'categories' => Category::all(), 'relatedProducts' => $relatedProducts, 'name_cat' => $category]
        );
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
