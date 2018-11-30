@extends('layouts.shopping')

@section('meta')
    @parent
    <title>T-Rex go shopping</title>
    <meta name="description" content="T-Rex đã mua và mang về Việt Nam cho các bạn vài thứ, và đặt biệt là giá của nó sẻ rẻ hơn khi các bạn mua trực tiếp tại website" />
    <meta name="keywords" content="google home mini, google home, google home viet nam, google chrome cast, chrome cast, shine 2, misfit, misfit shine 2, shine2, Misfit ray" />
    <meta name="robots" content="index,follow,noodp,noydir" />
@endsection

@section('content')
    <div class="row intro">
        <div class="mx-auto intro-content p-3">
            <h1>T-Rex go shopping</h1>
                <p>T-Rex đã mua và mang về Việt Nam cho các bạn vài thứ, <br/> và đặt biệt là giá của nó sẻ rẻ hơn khi các bạn mua trực tiếp tại website.</p>
                <a href="{{route('faq')}}" class="float-right question">Tại sao hay vậy?</a>
        </div>
    </div>

    <div class="row">
        @foreach($products as $brand => $productGroupByBrand)
            @foreach($productGroupByBrand as $product)
            <div class="card col-sm-3 text-center float-left border-0 p-4">
                <a href="{{route('product-detail', [$brand, $product['slug']])}}">
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
                    @endif
                </div>
            </div>
            @endforeach
        @endforeach
    </div>

    @include("partials/fb-comment")

@endsection