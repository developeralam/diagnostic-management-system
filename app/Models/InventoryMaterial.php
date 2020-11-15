<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
    	'material_id', 'unit_id', 'supplyer_id', 'quantity', 'status',
    ];

    //Get all Invertory Product
    public static function getAllmaterial()
    {
        return InventoryMaterial::all();
    }
    public static function getExistMaterialQuantity($id)
    {
    	$value = InvertoryMaterial::where('material_id', $id)->get();
    	$quantity = $value->quantity;
    	dd($quantity);
    }
    //Material Name
    public function material()
    {
       return $this->belongsTo(MaterialName::class, 'material_id');
    }
    //Unit Name
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    //Supplyer Name
    public function supplyer()
    {
        return $this->belongsTo(MaterialSupplyer::class, 'supplyer_id');
    }
}
