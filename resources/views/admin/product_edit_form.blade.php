@extends('layouts.admin.app')
@section('content')
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-sm-2"> </div>
        <div class="col-sm-8 ">
            <div class="col-sm-6" style="color:#6c757d; font-size:25px">Edit Product</div>
            @forelse($products as $product)
                <form action="/admin/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-6 mt-3" id="">
                        <select class="form-control" id="category" name="category">
                            <option value="" selected>Choose Category</option>
                            @forelse($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @empty
                                <p>No Category at the moment</p>
                            @endforelse
                        </select>
                        @if($errors->has('category'))
                            <div class="text-danger">{{ $errors->first('category') }}</div>
                        @endif
                    </div>
                    <div class="col-sm-6 mt-3">
                        <input class="form-control" type="text" name="name" placeholder="{{$product->name}}" value="{{$product->name}}">
                        @if($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="col-sm-6 mt-3" id="">
                        <input class="form-control" id="" type="text" name="price" placeholder="{{$product->price}}" value="{{$product->price}}">
                        @if($errors->has('price'))
                            <div class="text-danger">{{ $errors->first('price') }}</div>
                        @endif
                    </div>
                    <div class="col-sm-6 mt-3" id="">
                        <textarea class="form-control" rows="6" cols="50" type="text" name="description" placeholder="{{$product->description}}" value="{{$product->description}}"></textarea>
                    </div>
                    <div class="col-sm-6 mt-3" id="">
                        <textarea class="form-control" rows="6" cols="50" type="text" name="comments" placeholder="{{$product->comment}}" value="{{$product->comment}}"></textarea>
                    </div>
                    <div class="col-sm-6 mt-3 align-items-left justify-content-left text-left" id="">
                        <input class="" id="" type="file" name="image" value="" >
                        @if($errors->has('image'))
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <div class="row col-sm-6 mt-5" id="">
                        <div class="col-sm-2">
                            <a class="btn btn-info" href="{{url('/admin/products')}}" >Cancel</a>
                        </div>
                        <div class="col-sm-8"> </div>
                        <div class="col-sm-2 ">
                            <input class="btn btn-success" type="submit" name="submit" value="Save" id="">
                        </div>
                    </div>
                @empty
                    <p>No Images at the moment</p>
                @endforelse
                </form>
        </div>
        <div class="col-sm-2"> </div>
    </div>
@stop
