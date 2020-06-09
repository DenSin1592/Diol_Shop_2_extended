<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;

class ProductController extends BaseController
{
    public function showProduct($id)
    {
        $product = Product::find($id);

        if(!$product)
            return redirect('/products');

        return view('shop.product', compact('product'));
    }
}
