<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCatgegories extends Model
{
    use HasFactory;
    protected $fillable = [
    	'category_name', 'status',
    ];

    //Get All Category Name
    public static function getAllServiceCategory()
    {
    	$data = ServiceCatgegories::all();
    	return $data;
    }
}
