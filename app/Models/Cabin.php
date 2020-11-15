<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    use HasFactory;
    protected $fillable = [
    	'ward_id', 'space_location', 'price', 'condition', 'status',
    ];

    //get All Cabin
    public static function getAllCabin()
    {
    	$cabin = Cabin::all();
    	return $cabin;
    }
    //Get Ward Name From Ward id
    public function ward()
    {
    	return $this->belongsTo(Ward::class, 'ward_id');
    	 

    }
}
