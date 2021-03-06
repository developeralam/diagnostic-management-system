<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugAdvice extends Model
{
    use HasFactory;
    protected $fillable = [
    	'drug_advice', 'status',
    ];
    //Get All Drug Advice
    public static function getAllDrugAdvice()
    {
    	return DrugAdvice::all();
    }
}
