@extends('layouts.shopping')

@section('title')
@endsection

@section('meta')
    @parent
    <meta name="description" content="" />
    <meta name="keywords" content="google home mini, google home, google home viet nam, google chrome cast, chrome cast, shine 2, misfit, misfit shine 2, shine2, Misfit ray" />
    <meta name="robots" content="index,follow,noodp,noydir" />
@endsection

@section('content')
    <div class="row">
        @foreach($products as $brand => $productGroupByBrand)
            @foreach($productGroupByBrand as $product)
            <div class="card col-sm-4 text-center float-left border-0 p-4">
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
                    @endif
                </div>
            </div>
            @endforeach
        @endforeach
    </div>

    <!-- Facebook comment -->
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm">
          <div class="row fb-comments" data-href="{{route('shopping')}}" data-numposts="50" data-width="100%"></div>
        </div>
        <div class="col-sm"></div>
    </div>

@endsection