<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EshopController extends Controller
{
    public function index()
    {
        return view('eshop.frontEnd.home.home');
    }

    public function products()
    {
        return view('eshop.frontEnd.product.product');
    }
    public function productDetails()
    {
        return view('eshop.frontEnd.product.product-details');
    }

    public function cart()
    {
        return view('eshop.frontEnd.cart.cart');
    }
    public function checkout()
    {
        return view('eshop.frontEnd.cart.checkout');
    }

    public function userLogin()
    {
        return view('eshop.frontEnd.user.user-login');
    }
    public function userRegister()
    {
        return view('eshop.frontEnd.user.user-register');
    }

    public function userAccount()
    {
        return view('eshop.frontEnd.user.user-account');
    }

}
