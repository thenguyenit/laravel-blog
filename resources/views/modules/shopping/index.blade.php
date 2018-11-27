@extends('layouts.shopping')

@section('title')
@endsection

@section('meta')
    @parent
    <meta name="description" content="" />
    <meta name="keywords" content="google home mini, google home, google home viet nam, google chrome cast, chrome cast, shine 2, misfit, misfit shine 2, shine2" />
    <meta name="robots" content="index,follow,noodp,noydir" />
@endsection

@section('content')
    <div class="row">
        @foreach($products as $brand => $productGroupByBrand)
            @foreach($productGroupByBrand as $product)
            <div class="card col-sm-3 text-center float-left border-0 p-4">
                <a href="{{route('article-detail', [$brand, $product['slug']])}}">
                    <img class="card-img-top img-thumbnail border-0" style="height: 300px; width: auto;"
                         src="{{$product['avatar']}}" alt="{{$product['title']}}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$product['title']}}</h5>
                    @if(key_exists('price', $product))
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{$product['price']}}
                            @if(key_exists('shipping-free', $product) && $product['shipping-free'] == true)
                                <span class="badge badge-info">Free ship</span>
                            @endif
                        </h6>
                        <div class="yotpo bottomLine"
                             data-appkey="hN8N04UNyaODL34zSuQsLH7nNstHnVukE7qiEoXj"
                             data-domain="{{trans('app.url')}}"
                             data-product-id="{{$product['slug']}}"
                             data-product-models="{{$product['title']}}"
                             data-name="{{$product['title']}}"
                             data-url="{{route('article-detail', [$brand, $product['slug']])}}"
                             data-image-url="{{$product['avatar']}}"
                             data-description="{{$product['title']}}"
                             {{--data-bread-crumbs="{{$productGroupByBrand}}"--}}
                        >
                        </div>
                    @endif
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
@endsection