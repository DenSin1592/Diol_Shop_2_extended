<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\CartController;
use App\Http\Requests\showProductsRequest;
use App\Repository\ProductRepository;

class ProductsController extends BaseController
{
    /**
     * @var ProductRepository
     */
    private ProductRepository $ProductRepository;

    /**
     * ProductsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->ProductRepository = new ProductRepository();
    }

    /**
     * @param showProductsRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Render Main List Products
     */
    public function showProducts(showProductsRequest $request)
    {
        $cartController = new CartController();
        $cart = $cartController->getCart($request);
        unset($cartController);

        if($request->input('column') && $request->input('orderby')){
            $products = $this
                ->ProductRepository
                ->getForProductsListSortBy(
                    $request->input('column'),
                    $request->input('orderby'), 10);
        }else {
            $products = $this
                ->ProductRepository
                ->getForProductList(10);
        }
        return view('shop.products', compact('products','cart'));
    }


}
