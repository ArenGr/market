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
                                <option value="" selected>-- Select a Category --</option>
                                @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @empty
                                    <p>No Category at the moment</p>
                                @endforelse
                            </select>
                            <div class="text-muted" id=""><i><small>If there aren't any category, please add a new.</small></i></div>
                            @if($errors->has('category'))
                                <div class="text-danger">{{ $errors->first('category') }}</div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <a href="/admin/add_new_product/add_new_category/create" class="btn btn-secondary">Add Category</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control" type="text" name="name" placeholder="Product Name">
                    @if($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="col-sm-6 mt-3" id="">
                    <input class="form-control" id="" type="text" name="price" placeholder="Product Price">
                    @if($errors->has('price'))
                        <div class="text-danger">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="col-sm-6 mt-3" id="">
                    <textarea class="form-control" rows="6" cols="50" type="text" name="description" style="" placeholder="Additional Description"></textarea>
                </div>
                <div class="col-sm-6 mt-3" id="">
                    <textarea class="form-control" rows="6" cols="50" type="text" name="comments" style="" placeholder="Comments"></textarea>
                </div>
                <div class="col-sm-6 mt-3 align-items-left justify-content-left text-left" id="">
                    <input   id="" type="file" name="image" >
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
            </form>
        </div>
        <div class="col-sm-2"> </div>
    </div>
@stop
