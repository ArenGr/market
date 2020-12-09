@extends('layouts.admin.app')
@section('content')
    <form action="{{url('/admin/add_new_product/add_new_category/store')}}" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <input class="form-control " type="text" name="new_category_name" value="" id="new_category">
            </div>
            <div class="col-sm-4">
                <input type="submit" class="btn btn-success" value="Save"/>
            </div>
        </div>
    </form>
@stop
