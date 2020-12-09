<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::all();
        $categories = Category::all();
        return view('admin.products')->with('prod', $prod)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product_create_form')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $product = new Product();

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    /* 'name' => 'string|max:40', */
                    'image' => 'mimes:jpg,jpeg,png|max:1014',
                ]);
                 $extension = $request->image->extension();
                $request->image->storeAs('/public', time().".".$extension);
                $url = Storage::url(time().".".$extension);
                $product->product_name = $request->name;
                $product->product_description = $request->description;
                $product->product_price = $request->price;
                $product->product_image = $url;
                $product->product_comment = $request->comments;
                $product->product_category = $request->category;

                $product->save();
                return Redirect::back();
            }
            
        }
        abort(500, 'Could not upload image :(');
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function getByCategory(Request $request)
    {
        $name = $request->name;
        $prod = Product::where('product_category', $name)->get();
        $view = view("admin.products",compact('prod'))->render();
        return response()->json(['prod'=>$view]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Product::where('id', $id)->get();
        return view('admin.product_edit_form')->with('prod', $prod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    /* 'name' => 'string|max:40', */
                    'image' => 'mimes:jpg,jpeg,png|max:1014',
                ]);
                 $extension = $request->image->extension();
                $request->image->storeAs('/public', time().".".$extension);
                $url = Storage::url(time().".".$extension);
                $product->product_name = $request->name;
                $product->product_description = $request->description;
                $product->product_price = $request->price;
                $product->product_image = $url;
                $product->product_comment = $request->comments;
                $product->product_category = $request->category;

                $product->save();
                /* return redirect()->route('products'); */
                return redirect('/admin/products');
                /* return Redirect::back(); */
            }
            
        }
        abort(500, 'Could not upload image :(');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return Redirect::back();
    }
}
