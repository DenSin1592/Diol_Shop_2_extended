<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     *
     * Render personal page product
     */

    public function showProduct(Request $request, $id)
    {
        $cartController = new CartController();
        $cart = $cartController->getCart($request);
        unset($cartController);

        $product = Product::find($id);

        if(!$product)
            return redirect('/products');

        return view('shop.product', compact('product', 'cart'));
    }
}
