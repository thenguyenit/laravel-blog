@extends('layouts.shopping')

@section('meta')
    <title>{{trans('app.name')}} mua {{$product['title']}}</title>
    <meta name="description" content="{{$product['title']}}" />
    <meta name="keywords" content="{{$product['title']}}, {{array_get($product, 'keywords')}}" />
    <meta property="og:title" content="{{$product['title']}}"/>
@endsection

@push('head')
    <link async href="{{asset('components/lightbox2/dist/css/lightbox.min.css')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="row intro">
        <div class="mx-auto intro-content p-3">
            <h1 class="pt-5">{{$product['title']}}</h1>
            @if(key_exists('price', $product))
                <h6 class="card-subtitle mb-2 text-muted">
                    {{$product['price']}}
                    @if(key_exists('shipping-free', $product) && $product['shipping-free'] == true)
                        <span class="badge badge-info">Free ship</span>
                    @endif
                </h6>
                @if(key_exists('resource-title', $product) && key_exists('resource-link', $product))
                    <small>
                        Nguồn: <a class="text-warning" href="{{$product['resource-link']}}" target="_blank">{{$product['resource-title']}}</a>
                    </small>
                @endif
            @endif
        </div>
    </div>

    <div class="row">
        @if(isset($product['gallery']) && is_array($product['gallery']))
            <div class="container text-center">
                @foreach($product['gallery'] as $image)
                    <a class="" href="{{asset('storage/product/' . $image)}}" data-lightbox="example-set">
                        <img class="shadow p-3 mb-5 bg-white rounded border border-warning example-image img-fluid img-thumbnail col-sm-2"
                             src="{{asset('storage/product/' . $image)}}" alt="{{$product['title']}}"/>
                    </a>
                @endforeach
            </div>
        @endif
        @if(isset($product['video']) && is_array($product['video']))
            <div class="container text-center">
                @foreach($product['video'] as $video)
                    <a class="" href="{{$video}}" target="_blank">
                        <img class="shadow p-3 mb-5 bg-white rounded border border-warning example-image img-fluid img-thumbnail col-sm-2"
                             src="{{asset('storage/product/other/video.webp')}}" alt="Video"/>
                    </a>
                @endforeach
            </div>
        @endif
        <div class="clearfix"></div>
    </div>

    <div class="container">
        <div id="blog-content" class="markdown-body">{!! $product['content'] !!}</div>
    </div>

    @include("partials/fb-comment")

@endsection

@push('script-footer')
    <script src="{{asset('components/lightbox2/dist/js/lightbox-plus-jquery.min.js')}}"></script>

@endpush