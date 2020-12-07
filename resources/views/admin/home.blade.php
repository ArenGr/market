@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <h2>Pro Sidebar</h2>
        <hr>
        <div class="row">
            <div class="form-group col-md-12">
                <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>
                <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
                    Github</a>, it contains more themes and background image option</p>
            </div>
            <div class="form-group col-md-12">
                <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=star&count=true&size=small" frameborder="0" scrolling="0" width="90px" height="30px"></iframe>
                <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=fork&count=true&size=small" frameborder="0" scrolling="0" width="90px" height="30px"></iframe>
            </div>
            <div class="form-group col-md-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">New !</h4>
                    <p>New react pro sidebar library is now available on <a href="https://www.npmjs.com/package/react-pro-sidebar" target="_blank">npm</a> <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">
                        <img alt="GitHub stars" src="https://img.shields.io/github/stars/azouaoui-med/react-pro-sidebar?style=social" />
                    </a></p>
                    <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank" class="btn btn-sm btn-primary mr-2">
                        Github</a>
                    <a href="https://azouaoui-med.github.io/react-pro-sidebar" target="_blank" class="btn btn-sm btn-success">
                        Demo</a>
                </div>
            </div>
        </div>
    </div>
@stop



{{-- <div class="container-fluid mt-5"> --}}
    {{--     <div class="row"> --}}
        {{--         <div class="adm-sidebar-wrapper col-sm-2 ml-3 shadow p-3 mb-5 bg-white rounded" style="z-index:14; font-size:15px; color:#6c757d;"> --}}
            {{--             <div class="col-sm-12 p-3" style="border-bottom: solid 1px rgba(0,0,0,0.04)"> --}}
                {{--                 Admin Logo --}}
                {{--             </div> --}}
            {{--             <div class="col-sm-12 text-danger pb-3 pt-3" style="font-size:25px"> --}}
                {{--                 Menu --}}
                {{--             </div> --}}
            {{--             <div class="col-sm-12 mt-2 menu-items" style="color:#6c757d; font-size:25px"> --}}
                {{--                 <i class="fa fa-trash"></i> --}}
                {{--                 <span class="ml-3"> --}}
                    {{--                     Dashboard --}}
                    {{--                 </span> --}}
                {{--             </div> --}}
            {{--             <div class="col-sm-12 mt-2 menu-items" style="color:#6c757d; font-size:25px"> --}}
                {{--                 <i class="fa fa-product-hunt"></i> --}}
                {{--                 <span class="ml-3"> --}}
                    {{--                     Products --}}
                    {{--                 </span> --}}
                {{--             </div> --}}
            {{--             <div class="col-sm-12 mt-2 menu-items create-product-block" style="color:#6c757d; font-size:25px; cursor:pointer; hover:background-color:green"> --}}
                {{--                 <i class="fa fa-plus"></i> --}}
                {{--                 <span class="ml-3"> --}}
                    {{--                     Create Product --}}
                    {{--                 </span> --}}
                {{--             </div> --}}
            {{--         </div> --}}
        {{--         <div class="col-sm-2"> </div> --}}
        {{--         <div class="col-sm-7 justify-content-center text-center add-new-product" style="display:none"> --}}
            {{--             <div class="create-product-wrapper col-sm-12"> --}}
                {{--                 <div class="col-sm-6" style="color:#6c757d; font-size:25px">Add New Product</div> --}}
                {{--                 <form action="store" method="POST" enctype="multipart/form-data"> --}}
                    {{--                     @csrf --}}
                    {{--                     <div class="col-sm-6 mt-1"> --}}
                        {{--                         <input class="input-group" type="text" name="name" placeholder="Product Name"> --}}
                        {{--                         <p class="text-muted" id=""><i><small>e.g. product name</small></i></p> --}}
                        {{--                     </div> --}}
                    {{--                     <div class="col-sm-6 mt-1" id=""> --}}
                        {{--                          <select class="input-group" id="category" name="category"> --}}
                            {{--                             <option value="choose" selected>Choose Category</option> --}}
                            {{--                             <option value="fruits">Fruits</option> --}}
                            {{--                             <option value="games">Games</option> --}}
                            {{--                             <option value="books">Books</option> --}}
                            {{--                             <option value="courses">Courses</option> --}}
                            {{--                           </select> --}}
                        {{--                         <p class="text-muted" id="ls-ex-company-text-helper"><i><small>e.g. product category</small></i></p> --}}
                        {{--                     </div> --}}
                    {{--                     <div class="col-sm-6 mt-1" id=""> --}}
                        {{--                         <input class="input-group" id="" type="file" name="image" > --}}
                        {{--                         <p class="text-muted" id="ls-ex-start-date-text-helper"><i><small>e.g. product image</small></i></p> --}}
                        {{--                     </div> --}}
                    {{--                     <div class="col-sm-6 mt-1" id=""> --}}
                        {{--             <textarea class="input-group" rows="6" cols="50" type="text" name="description" style="font-family: Roboto, serif; border: none; outline: none;" placeholder="Additional Description"></textarea> --}}
                        {{--                         <p class="text-muted" id="ls-ex-end-date-text-helper"><i><small>e.g. additional description</small></i></p> --}}
                        {{--                     </div> --}}
                    {{--                     <div class="col-sm-6 mt-1" id=""> --}}
                        {{--                         <input class="input-group" id="" type="text" name="price" placeholder="Product Price"> --}}
                        {{--                         <p class="text-muted" id="ls-ex-location-text-helper"><i><small>e.g. product price</small></i></p> --}}
                        {{--                     </div> --}}
                    {{--                     <div class="col-sm-6 mt-1" id=""> --}}
                        {{--             <textarea class="input-group" rows="6" cols="50" type="text" name="comments" style="font-family: Roboto, serif; border: none; outline: none;" placeholder="Comments"></textarea> --}}
                        {{--                         <p class="text-muted" id=""><i><small>e.g. comments</small></i></p> --}}
                        {{--                     </div> --}}
                    {{--                     <div class="col-sm-6 mt-1 text-right" id=""> --}}
                        {{--                         <input class="btn btn-success" type="submit" name="submit" value="Create" id=""> --}}
                        {{--                     </div> --}}
                    {{--                 </form> --}}
                {{--             </div> --}}
            {{--         </div> --}}
        {{--     </div> --}}
    {{-- </div> --}}


