<?php

namespace App\Http\Controllers;

use App\Models\MaterialName;
use Illuminate\Http\Request;

class MaterialNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materialname.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materialname.create');
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
            'material_name' => 'required|string',
            'unit_id' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $material = new MaterialName;
        $material->material_name = $request->material_name;
        $material->unit_id = $request->unit_id;
        $material->status = $request->status;
        $material->save();
        session()->flash('success', 'Material Added Successfully');
        return redirect()->route('materialname.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialName  $materialName
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialName $materialName)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialName  $materialName
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = MaterialName::find($id);
        return view('materialname.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialName  $materialName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'material_name' => 'required|string',
            'unit_id' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $material = MaterialName::find($id);
        $material->material_name = $request->material_name;
        $material->unit_id = $request->unit_id;
        $material->status = $request->status;
        $material->save();
        session()->flash('success', 'Material Updated Successfully');
        return redirect()->route('materialname.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialName  $materialName
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = MaterialName::find($id);
        $material->delete();
        session()->flash('success', 'Material Name Deleted Successfully');
        return redirect()->route('materialname.index');
    }
}
