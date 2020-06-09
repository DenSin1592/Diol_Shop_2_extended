<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    /**
     * @var Cart
     */
    private Cart $cart;

    /**
     * @param Request $request
     *
     * Create cart
     */
    private function setCart(Request $request)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') :null;
        $this->cart = new Cart($oldCart);
    }

    /**
     * @param $request
     * @return Cart
     *
     * Get cart
     */
    public function getCart($request)
    {   $this->setCart($request);
        return $this->cart;
    }

    /**
     * @param Request $request
     * @return response
     *
     * Add to cart
     */
    public function addToCart(Request $request)
    {
        $validatedData = $request->validate(['id' => "required|exists:products"]);
        $this->setCart($request);
        $product = Product::find($validatedData['id']);
        $this->cart->addItem($product, $validatedData['id']);
        $request->session()->put('cart', $this->cart);

        $data = [
            'success' => true,
            'totalCount' => $this->cart->totalCount,
            'totalPrice' => $this->cart->totalPrice
        ];
        echo json_encode($data);

    }

    /**
     * @param Request $request
     * @return response
     *
     * Add to cart
     */
    public function deleteFromCart(Request $request)
    {
        $validatedData = $request->validate(['id' => "required|exists:products"]);
        $this->setCart($request);
        $product = Product::find($validatedData['id']);
        $this->cart->deleteItem($product, $validatedData['id']);
        $request->session()->put('cart', $this->cart);

        $data = [
            'success' => true,
            'totalCount' => $this->cart->totalCount,
            'totalPrice' => $this->cart->totalPrice
            ];
        echo json_encode($data);
    }
}
