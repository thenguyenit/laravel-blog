@extends('layouts.master')

@section('title')
@endsection

@section('meta')
    @parent
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow,noodp,noydir" />
@endsection

@section('content')
    <div class="row">
        <div class="box article-container">
            @foreach($articles as $year => $articlesGroupByYear)
                <div class="col-lg-12">
                    <hr>
                    <h1 class="text-center">{{$year}}</h1>
                    <hr>
                </div>
                @foreach($articlesGroupByYear as $article)
                    <div class="col-lg-12 article">
                        <h4>
                            <a href="{{route('article-detail', [$year, $article['slug']])}}">{{$article['title']}}</a>
                            <small>{{$article['created_at']->format('M d, Y')}}</small>
                        </h4>
                    </div>
                    <div class="clearfix"></div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection