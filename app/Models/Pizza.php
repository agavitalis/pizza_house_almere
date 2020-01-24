<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable =[
        'pizza_name','pizza_description','flavour','price','old_price','in_stock','menu_id','display_picture_path','display_picture_name'
    ];
  
    public function pictures()
    {
        return $this->hasMany('App\Models\Picture');
    }
}
