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
       $pizza->pizza_name = $request->pizza_name;
       $pizza->flavour = $request->pizza_flavour;
       $pizza->price = $request->pizza_price;
       $pizza->pizza_description = $request->pizza_description;
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

       //then save the display picture of this pizza
       $display_picture = Picture::where(['pizza_id'=>$pizza->id])->first();
       Pizza::where(['id'=>$pizza->id])->update(['display_picture_path'=>$display_picture->path,'display_picture_name'=>$display_picture->name]);

       return back()->with('success', 'Pizza Created');

    }

    public function manage_pizza(Request $request, $per_page = 10){
        
        if($request->isMethod('GET')){

            $pizzas = Pizza::paginate($per_page);
            return view('admin.manage_pizza', compact('pizzas'));

        }

    }
}
