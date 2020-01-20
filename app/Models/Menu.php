<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =[
        'name','description','created_by'
    ];

    public function pizzas()
    {
        return $this->hasMany('App\Models\Pizza');
    }
}
