<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
    	'unit_name', 'status',
    ];

    //Get All Unit
    public static function getAllUnit()
    {
    	return Unit::all();
    }

    
}
