<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
    	'ward_name',
    ];


    //Get All Ward
    public static function getAllWard()
    {
    	$ward = Ward::all();
    	return $ward;
    }
}
