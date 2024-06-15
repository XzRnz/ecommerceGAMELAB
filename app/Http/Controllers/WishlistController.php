<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function getWishlistedProducts()
{
    $items = Cart::instance("wishlist")->content();
    return view('wishlist',['items'=>$items]);
}
}
