<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(Request $request): View
    {
        $products = []; //this simulates the database
        $products[121] = ['name' => 'Tv samsung', 'price' => '1000'];
        $products[11] = ['name' => 'Iphone', 'price' => '2000'];

        $cartProducts = [];
        $cartProductData = $request->session()->get('cart_product_data'); //we get the products stored in session
        if ($cartProductData) {
            foreach ($products as $key => $product) {
                if (in_array($key, array_keys($cartProductData))) {
                    $cartProducts[$key] = $product;
                }
            }
        }

        $viewData = [];
        $viewData['title'] = 'Cart - Online Store';
        $viewData['subtitle'] = 'Shopping Cart';
        $viewData['products'] = $products;
        $viewData['cartProducts'] = $cartProducts;

        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(string $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data');
        $cartProductData[$id] = $id;
        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }

    public function removeAll(Request $request): RedirectResponse
    {
        $request->session()->forget('cart_product_data');

        return back();
    }
}
