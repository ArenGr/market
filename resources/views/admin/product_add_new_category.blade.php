@extends('layouts.admin.app')
@section('content')
    <form action="{{url('/admin/add_new_product/add_new_category/store')}}" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col-sm-4">
                <a href="/admin/add_new_product" class="btn btn-light" >Cancel</a>
            </div>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="new_category" value="" id="new_category">
                <div class="text-muted" id=""><i><small>Attention! Category name needs to be unique name.</small></i></div>
                @if($errors->has('new_category'))
                    <div class="text-danger">{{ $errors->first('new_category') }}</div>
                @endif
            </div>
            <div class="col-sm-4">
                <input type="submit" class="btn btn-success" value="Save"/>
            </div>
        </div>
    </form>
@stop
