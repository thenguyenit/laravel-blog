@extends('layouts.shopping')

@section('meta')
    <title>{{$article['title']}} - {{trans('app.name')}}</title>
    <meta name="description" content="{{$article['title']}}" />
    <meta property="og:title" content="{{$article['title']}}"/>
@endsection

@section('content')

    <div class="row intro">
        <div class="mx-auto intro-content p-3">
            <h1 class="pt-1">FAQ</h1>
            <p>{{$article['excerpt']}}</p>
            <p></p>
        </div>
    </div>

    <div class="">

        <div id="blog-content" class="markdown-body">{!! $article['content'] !!}</div>

    </div>

    @include("partials/fb-comment")

@endsection