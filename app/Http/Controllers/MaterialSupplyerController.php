<?php

namespace App\Http\Controllers;

use App\Models\MaterialSupplyer;
use Illuminate\Http\Request;

class MaterialSupplyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materialsupplyer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materialsupplyer.create');
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
            'name' => 'required|string',
            'company_name' => 'required|string',
            'contact' => 'required|string',
            'status' => 'required|integer',
        ]);
        $supplyer = new MaterialSupplyer;
        $supplyer->name = $request->name;
        $supplyer->company_name = $request->company_name;
        $supplyer->contact = $request->contact;
        $supplyer->status = $request->status;
        $supplyer->save();
        session()->flash('success', 'Supplyer Added Successfully');
        return redirect()->route('materialsupplyer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialSupplyer  $materialSupplyer
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialSupplyer $materialSupplyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialSupplyer  $materialSupplyer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materialsupplyer = MaterialSupplyer::find($id);
        return view('materialsupplyer.edit', compact('materialsupplyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialSupplyer  $materialSupplyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'company_name' => 'required|string',
            'contact' => 'required|string',
            'status' => 'required|integer',
        ]);
        $supplyer = MaterialSupplyer::find($id);
        $supplyer->name = $request->name;
        $supplyer->company_name = $request->company_name;
        $supplyer->contact = $request->contact;
        $supplyer->status = $request->status;
        $supplyer->save();
        session()->flash('success', 'Supplyer Updated Successfully');
        return redirect()->route('materialsupplyer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialSupplyer  $materialSupplyer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materialsupplyer = MaterialSupplyer::find($id);
        $materialsupplyer->delete($id);
        session()->flash('success', 'Material Supplyer Delted Successfully');
        return redirect()->route('materialsupplyer.index');
    }
}
