<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebProject extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
