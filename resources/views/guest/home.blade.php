@extends('layouts.guest.default')
@section('content')
<div class="container-fluid mt-5 mb-5">
    <div>
        <select class="form-control" id="category" name="category" data-url="{{url('/byCategory')}}" onchange="changeCategory(this)">
            <option value="choose" selected>Show By Category</option>
            <option value="fruits">Fruits</option>
            <option value="games">Games</option>
            <option value="books">Books</option>
            <option value="courses">Courses</option>
        </select>
    </div>
</div>
<div class="container-fluid mt-5 mb-5">
    <div class="row col-sm-12">
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
                        <img src="{{$product->product_image}}" height="190">
                    </div>
                    <div class="text">
                        <div class="title">
                            <h2>{{ $product->product_price }} <span>$</span></h2>
                            <h3>{{ $product->product_name }}</h3>
                            <p class="text-muted">{{ $product->product_description }}</p>
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
