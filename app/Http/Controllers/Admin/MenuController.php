<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Auth;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_menu(Request $request){
        
        if($request->isMethod('GET')){

            return view('admin.create_menu');
        }

        $menu = new Menu();
        $menu->name =  $request->input('menu_name');
        $menu->description = $request->menu_description;
        $menu->created_by = Auth::user()->id;
        $menu->save();

        return back()->with("success","Menu Created" );
    }

    public function manage_menu(Request $request){

        if($request->isMethod('GET')){
            $menus = Menu::all();
            return view('admin.manage_menu', compact('menus'));
        }
    }

    public function test(){
        return view('admin.test');
    }
}
