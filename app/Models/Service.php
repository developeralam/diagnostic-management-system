<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
    	'service_name', 'service_code', 'service_price', 'service_category', 'status',
    ];

    //Get All Service
    public static function getAllService()
    {
    	$service = Service::all();
    	return $service;
    }
    //Get Category Name
    public function category()
    {
    	return $this->belongsTo(ServiceCatgegories::class, 'service_category');
    }
}
