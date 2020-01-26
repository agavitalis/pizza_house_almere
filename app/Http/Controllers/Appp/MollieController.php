<?php

namespace App\Http\Controllers\Appp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Order;
use Session;
use Auth;

class MollieController extends Controller
{
    public function preparepayment_mollie()
    {
        $order_array = Session::get('order_array');
        $price_total = 0;

        foreach ($order_array as $item) {

            $price = $item['price'] * $item['quantity'];
            $price_total =  $price_total + $price;
                    
        }

        $formatted_price_total = $price_total.".00";

        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => $formatted_price_total, // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'My first API payment',
            'redirectUrl' => route('paymentsuccess_mollie'),
            "metadata" => [
                "customer_first_name" => Auth::user()->first_name,
                "customer_last_name" => Auth::user()->last_name,
                "customer_email" => Auth::user()->email,
            ],

        ]);

        $payment = Mollie::api()->payments()->get($payment->id);
       
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }


    public function paymentsuccess_mollie(Request $request) {
      
        //record the paid orders and track numbers
        $order_array = Session::get('order_array');
        $track_number = Session::get('track_number');
       
        foreach ($order_array as $item) {

            $order = new Order;
            $order->pizza_id = $item['id'];
            $order->pizza_name = $item['pizza_name'];
            $order->price = $item['price'];
            $order->quantity = $item['quantity'];
            $order->track_number = $track_number;
            $order->user_id = Auth::user()->id;    

            $order->save();
        
        }

        return view("thank_you");
        
    }


}
