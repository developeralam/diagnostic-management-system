<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialName extends Model
{
    use HasFactory;
    protected $fillable = [
    	'material_name', 'unit_id', 'status',
    ];

    //Get All Unit Id
    public static function getAllMaterialName()
    {
    	$data =  MaterialName::all();
        return $data;
    }

    //Get Unit Name
    public function unit()
    {
    	return $this->belongsTo(Unit::class, 'unit_id');
    }
    //Get Unit Id From Material Id
    public static function idFromMaterial($id)
    {
        $unit = MaterialName::where('id', $id)->first();
        $unit_id = $unit->unit_id;
        return $unit_id;
    }
}
