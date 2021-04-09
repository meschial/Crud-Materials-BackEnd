<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model 
{
    protected $fillable = [
        'name', 'description', 'brand', 'quantity', 'date'
    ];

    protected $table = "materiais";
    public $timestamps = false; 
}
