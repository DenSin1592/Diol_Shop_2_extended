@extends('layouts.shop_layout')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Каталог</h1>
        <p class="lead"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae error eveniet hic ipsum minus odit tempora! A, accusantium, blanditiis consectetur deserunt enim, natus neque nisi nostrum officia reiciendis veniam voluptatem!</span>
        </p>
    </div>

    <p class="sort">Сортировать по: <a href="">цене</a> или по <a href="">названию</a>?</p>

    <div class="container">
        <div class="card-deck mb-3 text-center  ">

            <div class="mb-4 shadow-sm col-4">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="/product">Название</a></h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 </h1>
                    <ul class="list-unstyled mt-3 mb-4" style="background-image: url('images/phone_2.jpg');">

                        <li><h4 class="availability">В наличии</h4></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">В корзину</button>
                </div>
            </div>


        </div>
    </div>

@endsection
