<?php

namespace App\Http\Controllers\Appp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        //dd($request);
        return view('shopping_cart');
    }
}
