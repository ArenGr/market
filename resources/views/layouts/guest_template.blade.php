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
    </body>
</html>

