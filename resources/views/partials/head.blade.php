<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes"/>
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



<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

