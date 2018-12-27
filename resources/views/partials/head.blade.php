<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

<!-- Bootstrap Core CSS -->
<!-- <link async href="{{asset('components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"> -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom CSS -->
<link async href="{{asset('css/my-style.css')}}" rel="stylesheet">