<?php

namespace App\Http\Controllers\Appp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;
use App\Models\Contact;
use Session;
use Auth;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        
        //check and know the number of items ordered
        $count = 0 ;
        foreach($request->all() as $index => $string){
            if(strpos($index,'number')){  
                $count = $count + 1;
            }
        }

        //fetch these items from DB
        $cart = array();
        for ($i=1; $i <= $count ; $i++){ 

            //number of the item on the product table
            $item_number = "item_number_".$i;

            try{

                $pizza = Pizza::where(['id'=>$request->$item_number])->first(); 

            }catch(Exception $e){
                //
            }finally{

               array_push($cart,$pizza);
            }

        }
      
        return view('shopping_cart',compact('cart','count'));
    }

    public function shopping_address(Request $request){
        
        if($request->isMethod('GET')){

            return back();
        }else{

            //cheek if the guy is logged in, else take him to login page
            if(isset(Auth::user()->email)){
                $user = Auth::user()->id;
            }else{
                return redirect('/login');
            }

            //check and know the number of items ordered, by counting the quantity variable
            $count = 0 ;
            foreach($request->all() as $index => $string){
                if(strpos($index,'count')){  
                    $count = $count + 1;
                }
            }

            //fetch the details of the item and feed them in an array
            for ($i=1; $i <= $count; $i++) { 

                $pizza = "pizza_id_".$i;
                $quantity = "pizza_count_".$i;
                
                $order = Pizza::where(['id'=>$request->$pizza])->first();       
                $order = array_add(json_decode(json_encode($order),true), "quantity", $request->$quantity);
                $order_array[] = $order;
            }

            //set cart variables to session
            $track_number = "Pizza-".str_random(10);
            Session::put(['track_number'=> $track_number, 'order_array'=>$order_array]);
            
            //grab his contact
            $user_address = Contact::where(['user_id'=>Auth::user()->id])->first(); 

            //$value = Session::get('order_array'); 
            return view('shopping_address',compact('track_number','user_address'));
    
        }
       
    }


    public function shopping_payment(Request $request){

        if($request->isMethod('GET')){
            
            return back();
        }else{

            //update shipping address
            $contact = Contact::where(['user_id'=>Auth::user()->id])
                ->update(['country'=>$request->country,'state'=>$request->state,'city'=>$request->city,'zip_code'=>$request->code,'address'=>$request->address,'phone'=>$request->phone]);

            return view('shopping_payment');

        }
       
    }
}
