<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/head')

    @section('head')
    @show

</head>

<body>

    @include("partials/header")

    @include("partials/nav")

<div class="container">

    @yield('content')

</div>
<!-- /.container -->

    @include("partials/footer")
    @section('footer')
    @show

</body>

</html>
