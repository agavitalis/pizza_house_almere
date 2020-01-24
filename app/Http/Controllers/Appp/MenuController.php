<?php

namespace App\Http\Controllers\Appp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pizza;

class MenuController extends Controller
{
    public function menu(Request $request, $per_page = 10)
    {
      
        if($request->isMethod('GET')){

            //get all the menu
            $menu_array = array();
            $menu_pizza_array = array();
            $complete_menu = array();
            $menus = Menu::all();
                
            foreach ($menus as $menu) {
                
                try{
    
                    $menu_pizza = Menu::find($menu->id)->pizzas;
                    $menu_pizza_array = array("menu_pizza" => $menu_pizza);                   
        
                }catch(Exception $e){
                    //
                }finally{
    
                   $menu_array = array("menu" => $menu);
                   $temp_array = array_merge($menu_array,$menu_pizza_array);
                   array_push($complete_menu,$temp_array);
    
                    //clear the values
                    $menu_array = array();
                    $menu_pizza_array = array();
                    $temp_array = array();
    
                }
            
            }
           
            $popular_items = Pizza::inRandomOrder()->limit(10)->get();
            return view('menu', compact('complete_menu','popular_items'));
    
        }
       
    }
}
