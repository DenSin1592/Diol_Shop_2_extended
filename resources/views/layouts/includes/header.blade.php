<!-- START HEADER -->
<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">{{ config('app.name', 'Shop Test') }}</h5>
        @if($cart)
            <p id="products_in_cart">Товаров в корзине:
                <span class="totalCount">{{$cart->totalCount}}</span>
                ($<span class="totalPrice">{{$cart->totalPrice}}</span>)
            </p>
        @else
            <p id="products_in_cart">Товаров в корзине: 0 ($0)</p>
        @endif
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/">Home</a>
            {{--<a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>--}}
            <a class="p-2 text-dark" href="{{route('products')}}">Pricing</a>
        </nav>
        {{--<a class="btn btn-outline-primary" href="#">Sign up</a>--}}
    </div>
</header>
<!-- END HEADER -->
