<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'id', 'name', 'doigté', 'trou1', 'trou2', 'trou3', 'trou4', 'trou5', 'trou6', 
    ];
}
