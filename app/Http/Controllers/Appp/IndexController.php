<?php

namespace App\Http\Controllers\Appp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function search()
    {
        return view('search');
    }

    public function pizza_details()
    {
        return view('pizza_details');
    }

    public function cart()
    {
        return view('shopping_cart');
    }
}
