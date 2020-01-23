<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable =[
        'name','description','flavour','price','old_price','in_stock','menu_id'
    ];

    public function pictures()
    {
        return $this->hasMany('App\Models\Picture');
    }
}
