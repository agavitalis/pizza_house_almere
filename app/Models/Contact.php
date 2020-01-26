<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
        'country','state','city','zip_code','address','phone','user_id'
    ];
}
