<!doctype html>
<html lang="en">  
    <head>
        @include('partials/_head')
    </head>
    <body>
        <!-- Navbar Bootstrap -->
        @include('partials/_nav')

        <!-- Container  Bootstrap -->
        <div class="container">
            @include('partials/_messages')
            @yield('content') 
            <hr>
            <!-- Footer -->
            @include('partials/_footer')
        </div> <!-- end of .container -->

        <!-- Bootstrap Bundle with Popper -->
        @include('partials/_javascript')
        @yield('scripts')
    </body>
</html>