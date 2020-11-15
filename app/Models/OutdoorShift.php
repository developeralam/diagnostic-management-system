<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutdoorShift extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name', 'rank', 'status',
    ];

    //Get All Out Door Shift
    public static function getAllOutDoorShift()
    {
    	$data = OutdoorShift::all();
    	return $data;
    }
}
