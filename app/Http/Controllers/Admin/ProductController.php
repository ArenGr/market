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
        $categories = Category::all();
        $products = Product::with(array('category'=>function($query){
                $query->select('id','name');
            }))->get();

        return view('admin.products')->with('products', $products)->with('categories', $categories);
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
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:1014',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'category' => 'required'
        ]);

        if ($request->hasFile('image')) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', time().".".$extension);
                $url = Storage::url(time().".".$extension);
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $url;
        $product->comment = $request->comments;
        $product->category_id =$request->category;
        $product->save();

        return Redirect::back();
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function getByCategory(Request $request)
    {
        if ($request->category_id == 'all'){
            $prods = Product::all();
            return response()->json(['products'=>$prods]);
        }
        $category_id = $request->category_id;
        $prods = Product::where('category_id', $category_id)->get();
        return response()->json(['products'=>$prods]);
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
        $products = Product::where('id', $id)->get();
        $categories = Category::all();
        return view('admin.product_edit_form')->with('products', $products)->with('categories', $categories);
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
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:1014',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'category' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $request->image->storeAs('/public', time().".".$extension);
            $url = Storage::url(time().".".$extension);
        }

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $url;
        $product->comment = $request->comments;
        $product->category_id = $request->category;
        $product->save();

        return redirect('/admin/products');
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
