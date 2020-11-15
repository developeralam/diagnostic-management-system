<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ward.create');
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
            'ward_name' => 'required|string',
            'status' => 'required|integer',
        ]);
        $ward = new Ward;
        $ward->ward_name = $request->ward_name;
        $ward->status = $request->status;
        $ward->save();
        session()->flash('success', 'Ward Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ward = Ward::find($id);
        return view('ward.edit', compact('ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'ward_name' => 'required|string',
            'status' => 'required|integer',
        ]);
        $ward = Ward::find($id);
        $ward->ward_name = $request->ward_name;
        $ward->status = $request->status;
        $ward->save();
        session()->flash('success', 'Ward Updated Successfully');
        return redirect()->route('ward.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ward = Ward::find($id);
        $ward->delete();
        session()->flash('success', 'Ward Deleted Successfully');
        return back();
    }
}
