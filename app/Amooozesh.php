<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amooozesh extends Model
{
    //
    protected $fillable = [
        'title', 'body', 'price', 'image', 'user_id'
    ];
}
