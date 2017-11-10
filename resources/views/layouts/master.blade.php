<!doctype html>
<html>
    <head>
        @include('includes.head')
        @include('layouts.css')
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="#">
                        {{ config('app.name', 'Feedback') }}
                    </a>
                </div>
            </div>
        </nav>
            <div id="main" class="row">

                @yield('content')
                @yield('css')
                @yield('js')
                @yield('script')
            </div>

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>

