@extends('layouts.shop_layout')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">{{$product->title}}</h1>
        <p class="lead"><span>{{$product->description}}</span></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col product_image" style="background-image: url('{{asset($product->img)}}');"></div>
            <div class="col">
                @if($product->availability)
                    <h2 class="card-title pricing-card-title margin-vert-30 availability">В наличии</h2>
                @else
                    <h2 class="card-title pricing-card-title margin-vert-30 no_availability">Нет в наличии</h2>
                @endif
                <h1 class="card-title pricing-card-title margin-vert-30">${{$product->price}}</h1>
                {{--<button type="button" class="btn btn-lg btn-block btn-outline-primary margin-vert-30">В корзину</button>--}}
                    @if(isset($cart->items[$product->id]))
                        <button type="button" id="deleteFromCart_{{$product->id}}" class="btn btn-lg btn-block btn-outline-danger" onclick="deleteFromCart({{$product->id}})">Удалить из корзины</button>
                        <button type="button" id="addToCart_{{$product->id}}" class="btn btn-lg btn-block btn-outline-primary" onclick="addToCart({{$product->id}})" style="display: none">Добавить в корзину</button>
                        {{--<form action="/deleteFromCart" method="POST">
                            @csrf
                            <input type="text" hidden value="{{$product->id}}" name="id">
                            <input type="submit" value="удалить" class="btn btn-primary">
                        </form>--}}
                    @else
                        <button type="button" id="addToCart_{{$product->id}}" class="btn btn-lg btn-block btn-outline-primary" onclick="addToCart({{$product->id}})">Добавить в корзину</button>
                        <button type="button" id="deleteFromCart_{{$product->id}}" class="btn btn-lg btn-block btn-outline-danger" onclick="deleteFromCart({{$product->id}})" style="display: none">Удалить из корзины</button>
                        {{--<form action="/addToCart" method="POST">
                            @csrf
                            <input type="text" hidden value="{{$product->id}}" name="id">
                            <input type="submit" value="В корзину" class="btn btn-primary">
                        </form>--}}
                    @endif
            </div>
        </div>
    </div>
@endsection
