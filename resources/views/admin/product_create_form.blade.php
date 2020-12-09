@extends('layouts.admin.app')
@section('content')
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-sm-2"> </div>
        <div class="col-sm-8 ">
            <div class="col-sm-6" style="color:#6c757d; font-size:25px">Add New Product</div>
            <form action="store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 mt-3" id="">
                    <div class="row">
                        <div class="col-sm-8">
                            <select class="form-control" id="category" name="category">
                                <option value="choose" selected>Choose Category</option>
                                @forelse($categories as $category)
                                    <option value="{{$category->name_category}}">{{$category->name_category}}</option>
                                @empty
                                    <p>No Category at the moment</p>
                                @endforelse
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <a href="/admin/add_new_product/add_new_category/create" class="btn btn-secondary">Add Category</a>
                        </div>
                    </div>
                    {{-- <p class="text-muted" id="ls-ex-company-text-helper"><i><small>e.g. product category</small></i></p> --}}
                </div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control" type="text" name="name" placeholder="Product Name">
                    {{-- <p class="text-muted" id=""><i><small>e.g. product name</small></i></p> --}}
                </div>
                <div class="col-sm-6 mt-3" id="">
                    <input class="form-control" id="" type="text" name="price" placeholder="Product Price">
                    {{-- <p class="text-muted" id="ls-ex-location-text-helper"><i><small>e.g. product price</small></i></p> --}}
                </div>
                <div class="col-sm-6 mt-3" id="">
                    <textarea class="form-control" rows="6" cols="50" type="text" name="description" style="" placeholder="Additional Description"></textarea>
                    {{-- <p class="text-muted" id="ls-ex-end-date-text-helper"><i><small>e.g. additional description</small></i></p> --}}
                </div>
                <div class="col-sm-6 mt-3" id="">
                    <textarea class="form-control" rows="6" cols="50" type="text" name="comments" style="" placeholder="Comments"></textarea>
                    {{-- <p class="text-muted" id=""><i><small>e.g. comments</small></i></p> --}}
                </div>
                <div class="col-sm-6 mt-3 align-items-left justify-content-left text-left" id="">
                    <input   id="" type="file" name="image" >
                    {{-- <p class="text-muted" id="ls-ex-start-date-text-helper"><i><small>e.g. product image</small></i></p> --}}
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
            </form>
        </div>
        <div class="col-sm-2"> </div>
    </div>
@stop
