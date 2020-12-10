<?php

namespace App\Http\Controllers\Guest;

use App\Category;
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
        $categories = Category::all();
        return view('guest.home')->with('products', $products)->with('categories', $categories);
    }

    public function getByCategory(Request $request)
    {
        if ($request->category_id == 'all'){
            /* $category_id = $request->category_id; */
            $prods = Product::all();
            return response()->json(['products'=>$prods]);
        }
        $category_id = $request->category_id;
        $prods = Product::where('category_id', $category_id)->get();
        return response()->json(['products'=>$prods]);
    }
}
