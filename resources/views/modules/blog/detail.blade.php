@extends('layouts.master')

@section('title')
@endsection

@section('meta')
    @parent
    <meta name="description" content="{{$blogDetail['title']}}" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow,noodp,noydir" />
@endsection

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">{{$blogDetail['title']}}</h2>
                <hr>

                @if(isset($blogDetail['avatar']))
                <img class="img-responsive img-border img-left" src="{{$blogDetail['avatar']}}" alt="{{$blogDetail['title']}}">
                @endif

                <hr class="visible-xs">
                <div class="clearfix"></div>
                <br>
                <div id="blog-content" class="markdown">{!! $blogDetail['content'] !!}</div>


            </div>
        </div>
    </div>

@endsection

@push('script-footer')
<script type="text/javascript">

    $(document).ready(function(){
        var content = $('#blog-content').html();
        var converter = new showdown.Converter();
//        $('#blog-content').html(markdown.toHTML( content ) );
        $('#blog-content').html(converter.makeHtml( content ) );
    });
</script>
@endpush