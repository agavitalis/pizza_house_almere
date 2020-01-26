<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'pizza_id','price','quantity','track_number','user_id','contact_id',
    ];
}
