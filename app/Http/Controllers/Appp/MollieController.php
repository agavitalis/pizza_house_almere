<?php

namespace App\Http\Controllers\Appp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use Auth;

class MollieController extends Controller
{
    public function preparepayment_mollie()
    {
        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR',
            'value' => '100.00', // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'My first API payment',
        'redirectUrl' => route('paymentsuccess_mollie'),
        "metadata" => [
            "customer_first_name" => "12345",
            "customer_email" => "12345",
            "customer_phone" => "12345",
            "customer_name" => "12345",
        ],
        ]);

        $payment = Mollie::api()->payments()->get($payment->id);
       
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }


    public function paymentsuccess_mollie(Request $request) {
      
        
    }


}
