@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid  mb-5 row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <select class="form-control" id="category" name="category" data-url="{{url('admin/byCategory')}}" onchange="changeCategory(this)">
                <option value="choose" selected>--Show By Category--</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @empty
                    <p>No Category at the moment</p>
                @endforelse
            </select>
            <div class="text-muted" id=""><i><small>Attention! You can sort them by category, if you have created products based on them.</small></i></div>
        </div>
        <div class="col-sm-4">
            <a href="/admin/add_new_product" class="btn btn-success float-right">Add New Product</a>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row col-sm-12" id="cards" >
            @forelse($products as $product)
                <div class="col-sm-4 pt-5 pb-5 d-flex justify-content-center" id="all_products">
                    <div class="card">
                        <div class="head">
                            <div class="likes">
                                <p><i class="fa fa-heart mr-1"></i>212</p>
                            </div>
                            <div class="discount">
                                <button>30% off</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="{{$product->image}}" height="190">
                        </div>
                        <div class="text">
                            <div class="title">
                                <h2>{{ $product->price }} <span>$</span></h2>
                                <h3>{{ $product->name }}</h3>
                                <p class="text-muted">{{ $product->description }}</p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="action">
                                <button>Buy Now</button>
                            </div>

                            <div class="cart">
                                <button><ion class="ion-ios-basket"></ion> Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-3">
                            <a href="/admin/edit_product/{{$product->id}}" class="btn btn-info">Edit</a>
                        </div>
                        <div class="mt-3">
                            <a href="/admin/delete_product/{{ $product->id }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <div id="id"> </div>
            @empty
                <p>No Products at the moment</p>
            @endforelse
        </div>
    </div>
@stop
