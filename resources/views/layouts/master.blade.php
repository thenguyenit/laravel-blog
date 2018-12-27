<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/head')

    @section('head')
    @show

</head>

<body>

    @include("partials/nav")

<div class="container mt-5 pt-5">

    @yield('content')

</div>
<!-- /.container -->

    @include("partials/footer")
    @include("partials/ga")

    @section('footer')
    @show

</body>

</html>
