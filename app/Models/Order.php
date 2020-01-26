<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'pizza_id','pizza_name','price','quantity','track_number','user_id',
    ];
}
