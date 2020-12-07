<nav class="navbar navbar-light">
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}"> --}}
        {{--     {{ config('app.name', 'Laravel') }} --}}
        {{-- </a> --}}
        <div class="row">
            <div class="col-sm-12">
                <img src="{{asset('images/logo_market.jpg')}}" alt="" width="20%"/>
{{-- <link rel="stylesheet" href="{{ asset('css/admin_product_cart.css') }}"> --}}
            </div>
        </div>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}
        {{--     <span class="navbar-toggler-icon"></span> --}}
        {{-- </button> --}}

        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
        {{--     <!-- Right Side Of Navbar --> --}}
        {{--     <ul class="navbar-nav ml-auto"> --}}
        {{--         <!-- Authentication Links --> --}}
        {{--         @if(Auth::guard('admin')->check()) --}}
        {{--             <li class="nav-item dropdown"> --}}
        {{--                 <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
        {{--                     {{ Auth::guard('admin')->user()->name }} (ADMIN) <span class="caret"></span> --}}
        {{--                 </a> --}}
        {{--                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown"> --}}
        {{--                     <a href="{{route('admin.home')}}" class="dropdown-item">Dashboard</a> --}}
        {{--                     <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();"> --}}
        {{--                         Logout --}}
        {{--                     </a> --}}
        {{--                     <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;"> --}}
        {{--                         @csrf --}}
        {{--                     </form> --}}
        {{--                 </div> --}}
        {{--             </li> --}}
        {{--         @endif --}}
        {{--     </ul> --}}
        {{-- </div> --}}
    </div>
</nav> 

