<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;
use App\Models\Picture;
use Auth;

class PizzaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_pizza(Request $request){

        if($request->isMethod('GET')){

            $menus = Menu::all();
            return view('admin.create_pizza', compact('menus'));
        }

       //save the pizza and the images
       $pizza = new Pizza();
       $pizza->name = $request->pizza_name;
       $pizza->flavour = $request->pizza_flavour;
       $pizza->price = $request->pizza_price;
       $pizza->description = $request->pizza_description;
       $pizza->menu_id = $request->menu;
       $pizza->save();

       if($request->hasfile('pizza_pictures')){
            foreach($request->file('pizza_pictures') as $image)
            {
                $extension = $image->getClientOriginalExtension();
                $new_name = round(microtime(true)* 234) . '.' .$extension;
                $image->storeAs(  'public/uploads', $new_name);
                //get full path  
                $path = \App::make('url')->to('/')."/storage/uploads/".$new_name;

                $picture = new Picture();
                $picture->path = $path;
                $picture->name = $new_name;
                $picture->pizza_id = $pizza->id;
                $picture->save();

            }
       }

       return back()->with('success', 'Pizza Created');

    }

    public function manage_pizza(Request $request, $per_page = 10){
        
        if($request->isMethod('GET')){

        $pizza_array = array();
        $pizza_pictures_array = array();
        
        $complete_pizzas = array();
        $pizzas = Pizza::paginate($per_page);
        //push the pagination 
        $pagination = $pizzas;

        foreach ($pizzas as $pizza) {
            
            try{

                $picture_url = Pizza::find($pizza->id)->pictures;
                $pizza_pictures_array = array("picture_url" => $picture_url);
    
            }catch(Exception $e){
                //
            }finally{

               $pizza_array = array("pizza" => $pizza);
               $temp_array = array_merge($pizza_array,$pizza_pictures_array);
               array_push($complete_pizzas,$temp_array);

                //clear the values
                $pizza_array = array();
                $pizza_pictures_array = array();
                $temp_array = array();

            }
        
        }
        dd($complete_pizzas);
        return view('admin.manage_pizza', compact('complete_pizzas','pagination'));

        }

    }
}
