<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.guest.head')
    </head>
    <body>
        @include('includes.guest.navbar')
        <main>
            @yield('content')
        </main>
        @include('includes.guest.footer')
        @include('includes.guest.footer_scripts')
    </body>
</html>

