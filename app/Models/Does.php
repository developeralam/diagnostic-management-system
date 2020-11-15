<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Does extends Model
{
    use HasFactory;
    protected $fillable = [
    	'dose_name', 'status',
    ];
    //Get All Dose
    public static function getAllDose()
    {
    	return Does::all();
    }
}
