<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $products = Product::with('category')->whereFeatured(1)->take(8)->get();
        // ->whereFeatured(1)
        $slides = Slide::orderby('order', 'ASC')->paginate(9);
        return view('main.index')->with(compact('products', 'slides'));
    }
}
