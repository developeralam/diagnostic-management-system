<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialSupplyer extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name', 'company_name', 'contact', 'status',
    ];

    //Get All Supplyer
    public static function getAllSupplyer()
    {
    	return MaterialSupplyer::all();
    }
    
}
