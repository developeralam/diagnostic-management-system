<?php

namespace App\Http\Controllers;

use App\Models\Does;
use Illuminate\Http\Request;

class DoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dose.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'dose_name' => 'required|string',
            'status' =>'required|integer',
        ]);

        $dose = new Does;
        $dose->dose_name = $request->dose_name;
        $dose->status = $request->status;
        $dose->save();
        session()->flash('success', 'Dose Inserted Successfully');
        return redirect()->route('dose.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Does  $does
     * @return \Illuminate\Http\Response
     */
    public function show(Does $does)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Does  $does
     * @return \Illuminate\Http\Response
     */
    public function edit(Does $does)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Does  $does
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Does $does)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Does  $does
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dose = Does::find($id);
        $dose->delete();
        session()->flash('success', 'Dose Deleted Successfully');
        return redirect()->route('dose.index');
    }
}
