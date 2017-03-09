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

<!-- jQuery -->
<script src="{{asset('components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script async src="{{asset('components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- App js -->
<script async src="{{asset('js/app.js')}}"></script>

<noscript id="deferred-styles">
    {{--<link rel="stylesheet" type="text/css" href="small.css"/>--}}
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/my-style.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</noscript>
<script>
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>

@stack('script-footer')

