<!doctype html>
<html lang="vi">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon"/>

        @section('meta')
            <title>{{trans('app.slogan')}} - {{trans('app.name')}}</title>
            <meta name="description" content="{{trans('app.meta-description')}}">
            <meta name="keywords" content="{{trans('app.meta-keywords')}}">

            <meta property="og:title" content="{{trans('app.name')}}"/>
            <meta property="og:description" content="{{trans('app.meta-description')}}"/>
        @show

        <meta name="author" content="{{trans('app.meta-author')}}">
        <meta property="og:site_name" content="{{trans('app.name')}}"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link async href="{{asset('css/shopping-style.css')}}" rel="stylesheet">

        @section('head')
        @show

    </head>
    <body>

        @include("partials/shopping/nav")


        <nav class="navbar navbar-light">
            <!-- Navbar content -->
        </nav>

        <div class="container-fluid">

            @yield('content')

        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; {{config('app.name')}} {{date('Y')}}</p>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" class="scrollToTop"></a>

        @include("partials/ga")

        @section('footer')
        @show

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        @include("partials/shopping/messenger")
    </body>
</html>
