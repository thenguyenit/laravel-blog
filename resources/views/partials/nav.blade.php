<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/">{{trans('app.name')}}</a>
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="mr-auto navbar-nav">
            <li class="nav-item @if($_SERVER['REQUEST_URI'] == '/about-me') active @endif">
                <a class="nav-link" href="{{route('about-me')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('shopping')}}">Go to shopping</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/enjoy">Play T-Rex</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
