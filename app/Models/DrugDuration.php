<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugDuration extends Model
{
    use HasFactory;
    protected $fillable = [
    	'duration_name', 'status',
    ];

    //Get All Duration
    public static function getAllDuration()
    {
    	return DrugDuration::all();
    }
}
