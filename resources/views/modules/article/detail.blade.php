@extends('layouts.master')

@section('meta')
    <title>{{$article['title']}} - {{trans('app.name')}}</title>
    <meta name="description" content="{{$article['title']}}" />
    <meta property="og:title" content="{{$article['title']}}"/>
@endsection

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h2 class="intro-text text-center">{{$article['title']}}</h2>
                <hr>

                @if(isset($article['avatar']))
                <center><img class="img-responsive img-border" src="{{$article['avatar']}}" alt="{{$article['title']}}"></center>
                <hr class="visible-xs">
                @endif

                <div class="clearfix"></div>
                <br>
                <div id="blog-content" class="markdown-body">{!! $article['content'] !!}</div>

            </div>
        </div>
    </div>

@endsection

@push('script-footer')
@endpush```