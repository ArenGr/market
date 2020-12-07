@extends('layouts.admin.app')
@section('content')
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-sm-2"> </div>
        <div class="col-sm-8 ">
            <div class="col-sm-6" style="color:#6c757d; font-size:25px">Add New Product</div>
            <form action="store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 mt-1">
                    <input class="input-group" type="text" name="name" placeholder="Product Name">
                    <p class="text-muted" id=""><i><small>e.g. product name</small></i></p>
                </div>
                <div class="col-sm-6 mt-1" id="">
                    <select class="input-group" id="category" name="category">
                        <option value="choose" selected>Choose Category</option>
                        <option value="fruits">Fruits</option>
                        <option value="games">Games</option>
                        <option value="books">Books</option>
                        <option value="courses">Courses</option>
                    </select>
                    <p class="text-muted" id="ls-ex-company-text-helper"><i><small>e.g. product category</small></i></p>
                </div>
                <div class="col-sm-6 mt-1" id="">
                    <input class="input-group" id="" type="file" name="image" >
                    <p class="text-muted" id="ls-ex-start-date-text-helper"><i><small>e.g. product image</small></i></p>
                </div>
                <div class="col-sm-6 mt-1" id="">
                    <textarea class="input-group" rows="6" cols="50" type="text" name="description" style="font-family: Roboto, serif; border: none; outline: none;" placeholder="Additional Description"></textarea>
                    <p class="text-muted" id="ls-ex-end-date-text-helper"><i><small>e.g. additional description</small></i></p>
                </div>
                <div class="col-sm-6 mt-1" id="">
                    <input class="input-group" id="" type="text" name="price" placeholder="Product Price">
                    <p class="text-muted" id="ls-ex-location-text-helper"><i><small>e.g. product price</small></i></p>
                </div>
                <div class="col-sm-6 mt-1" id="">
                    <textarea class="input-group" rows="6" cols="50" type="text" name="comments" style="font-family: Roboto, serif; border: none; outline: none;" placeholder="Comments"></textarea>
                    <p class="text-muted" id=""><i><small>e.g. comments</small></i></p>
                </div>
                <div class="col-sm-6 mt-1 text-right" id="">
                    <input class="btn btn-success" type="submit" name="submit" value="Create" id="">
                </div>
            </form>
        </div>
        <div class="col-sm-2"> </div>
    </div>
@stop
