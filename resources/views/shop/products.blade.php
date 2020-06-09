@extends('layouts.shop_layout')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Каталог</h1>
        <p class="lead"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae error eveniet hic ipsum minus odit tempora! A, accusantium, blanditiis consectetur deserunt enim, natus neque nisi nostrum officia reiciendis veniam voluptatem!</span>
        </p>
    </div>
    <p class="sort">Сортировать по: |
        <a href="{{route('products', ['column' => 'price', 'orderby' => 'ASC'])}}">возрастанию цены</a> |
        <a href="{{route('products', ['column' => 'price', 'orderby' => 'DESC'])}}">убыванию цены</a> |
        <a href="{{route('products', ['column' => 'title', 'orderby' => 'ASC'])}}">от А до Я</a> |
        <a href="{{route('products', ['column' => 'title', 'orderby' => 'DESC'])}}">от Я до А</a>
    | </p>
    <div class="container">
        <div class="card-deck mb-3 text-center  ">
            @foreach($products as $product)
            <div class="mb-4 shadow-sm .col-5us">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="{{route('product', $product->id )}}">{{$product->title}}</a></h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">${{$product->price}}</h1>
                    <ul class="list-unstyled mt-3 mb-4" style="background-image: url('{{asset($product->img)}}');">
                        @if($product->availability)
                            <li><h4 class="availability">В наличии</h4></li>
                        @else
                            <li><h4 class="no_availability">Нет в наличии</h4></li>
                        @endif
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">В корзину</button>
                </div>
            </div>
            @endforeach
        </div>
        <div class="card-deck mb-3 text-center  ">
            <div class="mb-4 shadow-sm .col-lg-5th">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection
