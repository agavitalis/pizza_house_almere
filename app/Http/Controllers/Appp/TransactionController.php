<?php

namespace App\Http\Controllers\Appp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pizza;
use Session;
use Auth;

class TransactionController extends Controller
{
    public function transaction(Request $request)
    {
        dd("I arrived");
    }
}