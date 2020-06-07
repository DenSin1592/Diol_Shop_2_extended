<?php

namespace App\Http\Controllers\Shop;



class ProductController extends BaseController
{
    public function showProduct()
    {
        return view('shop.product');
    }
}
