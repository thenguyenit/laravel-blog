@extends('layouts.shopping')

@section('meta')
    <title>{{$product['title']}} - {{trans('app.name')}}</title>
    <meta name="description" content="{{$product['title']}}" />
    <meta property="og:title" content="{{$product['title']}}"/>
@endsection

@push('head')
    <link async href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" rel="stylesheet">
@endpush

@section('content')

    <div class="row intro">
        <div class="mx-auto intro-content p-3">
            <h1>{{$product['title']}}</h1>
            @if(key_exists('price', $product))
                <h6 class="card-subtitle mb-2 text-muted">
                    {{$product['price']}}
                    @if(key_exists('shipping-free', $product) && $product['shipping-free'] == true)
                        <span class="badge badge-info">Free ship</span>
                    @endif
                </h6>
            @endif
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">

                @if(isset($product['gallery']))
                    <div class="container gallery-container">
  
                        <h1 class="text-center">Bootstrap 3 Gallery</h1>
                      
                        <p class="page-description text-center">Grid Layout With Zoom Effect</p>
                          
                        <div class="tz-gallery">
                      
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="card">
                                        <a class="lightbox" href="{{asset('storage/product/chromecast-3-chalk.jpg')}}">
                                        <img src="{{asset('storage/product/chromecast-3-chalk.jpg')}}" alt="Park" class="card-img-top">
                                        </a>
                                    </div>
                                </div>
                                 
                        
                            </div>
                      
                        </div>
                      
                    </div>
                @endif
                <div class="clearfix"></div>
                <br>
                <div id="blog-content" class="markdown-body">{!! $product['content'] !!}</div>

            </div>
        </div>
    </div>

    @include("partials/fb-comment")

@endsection

@push('script-footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
@endpush