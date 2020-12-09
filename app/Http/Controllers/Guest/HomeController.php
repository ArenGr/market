<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('guest.home')->with('products', $products);
    }

    public function getByCategory(Request $request)
    {
        $name = $request->categoryName;
        $products = Product::where('product_category', $name)->get();
        $view = view("guest.home",compact('products'))->render();
        return response()->json(['products'=>$view]);
    }
}
