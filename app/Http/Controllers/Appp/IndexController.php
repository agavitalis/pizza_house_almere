<?php

namespace App\Http\Controllers\Appp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;

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
    public function index(Request $request, $per_page = 10)
    {
        //get all the menu
        if($request->isMethod('GET')){

            $menu_array = array();
            $menu_pizza_array = array();
            $complete_menu = array();
            $menus = Menu::inRandomOrder()->limit(10)->get();
            //push the pagination 
            $pagination = $menus;
    
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
            //dd($complete_menu);
            return view('index', compact('complete_menu','menus','popular_items'));
    
        }
       
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

   
}
