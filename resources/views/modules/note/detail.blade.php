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
                <hr>
                    <h2 class="intro-text text-center">{{$article['title']}}
                        <small class="text-center">{{$article['created_at']->format('M d, Y')}}</small></h2>
                <hr>

                @if(isset($article['avatar']))
                <img class="img-responsive img-border img-left" src="{{$article['avatar']}}" alt="{{$article['title']}}">
                @endif

                <hr class="visible-xs">
                <div class="clearfix"></div>
                <br>
                <div id="blog-content" class="markdown">{!! $article['content'] !!}</div>

            </div>
        </div>
    </div>

@endsection

@push('script-footer')
<script type="text/javascript">

    $(document).ready(function(){
        var content = $('#blog-content').html();
        var converter = new showdown.Converter();
        $('#blog-content').html(converter.makeHtml( content ) );
    });
</script>
@endpush