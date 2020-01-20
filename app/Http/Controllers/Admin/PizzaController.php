<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;
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

        $pizza = new Pizza();
        $pizza->name =  $request->input('menu_name');
        $pizza->description = $request->menu_description;
        $pizza->created_by = Auth::user()->id;
        $pizza->save();

        return back()->with("success","Pizza Created" );
    }

    public function manage_pizza(Request $request){
        
        if($request->isMethod('GET')){
            $pizza = Pizza::all();
            return view('admin.manage_pizza', compact('pizza'));
        }

    }
}
