<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function orders(Request $request){

        if($request->isMethod('GET')){

            $orders = Order::all();
            return view('admin.orders',compact('orders'));

        }

       
    }

    public function orders_latest(Request $request){

        if($request->isMethod('GET')){

            $orders = Order::all();
            return view('admin.orders',compact('orders'));
            return view('admin.create_pizza');
        }

       
    }

    public function orders_processing(Request $request){

        if($request->isMethod('GET')){

            return view('admin.create_pizza');
        }

       
    }

    public function orders_delivered(Request $request){

        if($request->isMethod('GET')){

            return view('admin.create_pizza');
        }

       
    }

   
}
