<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon"/>
<!--  <meta name="google-site-verification" content="EvZxJWF9DE1bvxaCZ3Gzol9NWrGXaJOvxGcKOFIugpc" />-->
<!--  <meta name="msvalidate.01" content="E3C6C0BD5CAD9DC458DCE270EB99AFC6" />-->

@section('meta')
    <title>{{trans('app.slogan')}} - {{trans('app.name')}}</title>
    <meta name="description" content="{{trans('app.meta-description')}}">
    <meta name="keywords" content="{{trans('app.meta-keywords')}}">

    <meta property="og:title" content="{{trans('app.name')}}"/>
    <meta property="og:description" content="{{trans('app.meta-description')}}"/>
@show

<meta name="author" content="{{trans('app.meta-author')}}">
<meta property="og:site_name" content="{{trans('app.name')}}"/>

<!-- Bootstrap Core CSS -->
<link href="{{asset('components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('css/my-style.css')}}" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37593459-17', 'auto');
    ga('send', 'pageview');

</script>