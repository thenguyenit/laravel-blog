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
                    <h2 class="text-center">{{$year}}</h2>
                </div>
                @foreach($articlesGroupByYear as $article)
                    <div class="col-lg-12 article">
                        <h4>
                            <a class="font-weight-normal text-dark" href="{{route('article-detail', [$year, $article['slug']])}}">{{$article['title']}}</a>
                            @if(key_exists('created_at', $article))
                            <small class="font-italic text-black-50">{{$article['created_at']->format('M d')}}</small>
                            @endif
                        </h4>
                        @if(key_exists('excerpt', $article))
                        <p class="font-weight-light">{{$article['excerpt']}}</p>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection