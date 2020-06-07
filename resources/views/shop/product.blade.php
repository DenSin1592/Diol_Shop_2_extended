@extends('layouts.shop_layout')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Название</h1>
        <p class="lead"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae error eveniet hic ipsum minus odit tempora! A, accusantium, blanditiis consectetur deserunt enim, natus neque nisi nostrum officia reiciendis veniam voluptatem!</span></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col product_image" style="background-image: url('images/phone_2.jpg');"></div>
            <div class="col">
                <h2 class="card-title pricing-card-title margin-vert-30">Наличие</h2>
                <h1 class="card-title pricing-card-title margin-vert-30">$0 </h1>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary margin-vert-30">В корзину</button>
            </div>
        </div>
    </div>
@endsection
