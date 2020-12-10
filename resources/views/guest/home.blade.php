@extends('layouts.guest.default')
@section('content')
<div class="container-fluid mt-5 mb-5">
    <div>
        <select class="form-control" id="category" name="category" data-url="{{url('/byCategory')}}" onchange="changeCategory(this)">
            <option value="all" selected>Show By Category</option>
            @forelse($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @empty
                <p>No Category at the moment</p>
            @endforelse
        </select>
    </div>
</div>
<div class="container-fluid mt-5 mb-5">
    <div class="row col-sm-12" id="cards">
        @forelse($products as $product)
            <div class="col-sm-4 pt-5 pb-5 d-flex justify-content-center">
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
                <div id="id"> </div>
            </div>
        @empty
            <p>No Products at the moment</p>
        @endforelse
    </div>
</div>
@stop
