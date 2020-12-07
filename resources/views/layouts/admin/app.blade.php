<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.admin.head')
    </head>
    <body>
        @include('includes.admin.navbar')
        <div class="row">
            <div class="col-sm-2">
                @include('includes.admin.sidebar')
            </div>
            <div class="col-sm-10">
                <main >
                    @yield('content')
                </main>
            </div>
        </div>
        @include('includes.admin.footer')
        @include('includes.admin.footer_scripts')
        {{-- Success Alert --}}
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        {{-- Error Alert --}}
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </body>
</html>

