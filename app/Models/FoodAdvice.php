<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodAdvice extends Model
{
    use HasFactory;
    protected $fillable = [
    	'food_name', 'status',
    ];

    //Get All Food Advice
    public static function getAllFoodAdvice()
    {
    	return FoodAdvice::all();
    }
}
