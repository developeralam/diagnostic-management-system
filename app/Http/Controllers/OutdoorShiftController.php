<?php

namespace App\Http\Controllers;

use App\Models\OutdoorShift;
use Illuminate\Http\Request;

class OutdoorShiftController extends Controller
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
        return view('outdoorshift.create');
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
            'rank' => 'required|integer',
            'status' => 'required|integer',
        ]);
        $shift = new OutdoorShift;
        $shift->name = $request->name;
        $shift->rank = $request->rank;
        $shift->status = $request->status;
        $shift->save();
        session()->flash('success', 'Outdoor Shift Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OutdoorShift  $outdoorShift
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OutdoorShift  $outdoorShift
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $outdoors = OutdoorShift::find($id);
        return view('outdoorshift.edit', compact('outdoors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OutdoorShift  $outdoorShift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'rank' => 'required|integer',
            'status' => 'required|integer',
        ]);
        $shift = OutdoorShift::find($id);
        $shift->name = $request->name;
        $shift->rank = $request->rank;
        $shift->status = $request->status;
        $shift->save();
        session()->flash('success', 'Outdoor Shift Updated Successfully');
        return redirect()->route('outdoorshift.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OutdoorShift  $outdoorShift
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = OutdoorShift::find($id);
        $data->delete();
        session()->flash('success', 'Outdoor Shift Deleted Successfully');
        return back();
    }
}
