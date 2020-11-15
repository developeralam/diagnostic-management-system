<?php

namespace App\Http\Controllers;

use App\Models\InventoryMaterial;
use App\Models\MaterialName;
use Illuminate\Http\Request;

class InventoryMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventorymaterial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventorymaterial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'material_id' => 'required|integer',
            'supplyer_id' => 'required|integer',
            'quantity' => 'required|integer',
            'status' => 'required|integer',
        ]);
        $exist = InventoryMaterial::where('material_id',$request->material_id)->first();
        if (empty($exist)) {
            $unit_id = MaterialName::idFromMaterial($request->material_id);
            $inventory = new InventoryMaterial;
            $inventory->material_id = $request->material_id;
            $inventory->supplyer_id = $request->supplyer_id;
            $inventory->quantity = $request->quantity;
            $inventory->unit_id = $unit_id;
     
            $inventory->status = $request->status;

            $inventory->save();
            session()->flash('success', 'Material added to inventory successfully');
            return redirect()->route('inventorymaterial.index');
        }else{
            $unit_id = MaterialName::idFromMaterial($request->material_id);
            $inventory = InventoryMaterial::where('material_id', $request->material_id)->first();
            $quantity = $request->exist_quantity + $request->quantity;
            $inventory->quantity = $quantity;
            $inventory->save();
            session()->flash('success', 'Material added to inventory successfully');
            return redirect()->route('inventorymaterial.index');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventoryMaterial  $inventoryMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryMaterial $inventoryMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventoryMaterial  $inventoryMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryMaterial $inventoryMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventoryMaterial  $inventoryMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryMaterial $inventoryMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventoryMaterial  $inventoryMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = InventoryMaterial::find($id);
        $material->delete();
        session()->flash('success', 'Material Deleted Successfully');
        return redirect()->route('inventorymaterial.index');
    }

    public function existQuantity($id)
    {
        $value = InventoryMaterial::where('material_id', $id)->first();
        $quantity = $value->quantity;
        return $quantity;
    }
}
