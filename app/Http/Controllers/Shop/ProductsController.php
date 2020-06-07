<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    public function showProducts()
    {
        $products = Product
            ::orderBy('availability', 'DESC')
            ->paginate(10);
        return view('shop.products', compact('products'));
    }
}
