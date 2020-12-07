@extends('layouts.guest_template')
@section('content')

<div class="container-fluid mt-5 mb-5">
    <div>
        <select class="input-group" id="category" name="category" onchange="changeCategory(this)">
            <option value="choose" selected>Choose Category</option>
            <option value="fruits">Fruits</option>
            <option value="games">Games</option>
            <option value="books">Books</option>
            <option value="courses">Courses</option>
        </select>
    </div>
</div>
<div class="container-fluid mt-5 mb-5">
    <div class="row" >
        @forelse($prod as $item)
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
                        <img src="{{$item->product_image}}" height="190">
                    </div>
                    <div class="text">
                        <div class="title">
                            <h2>{{ $item->product_price }} <span>$</span></h2>
                            <h3>{{ $item->product_name }}</h3>
                            <p class="text-muted">{{ $item->product_description }}</p>
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
            </div>
        @empty
            <p>No Images at the moment</p>
        @endforelse
    </div>
</div>
@stop
