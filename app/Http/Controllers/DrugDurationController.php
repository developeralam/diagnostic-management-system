<?php

namespace App\Http\Controllers;

use App\Models\DrugDuration;
use Illuminate\Http\Request;

class DrugDurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drug-duration.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'duration_name' => 'required|string',
            'status' => 'required|integer',
        ]);
        $duration = new DrugDuration;
        $duration->duration_name = $request->duration_name;
        $duration->status = $request->status;
        $duration->save();
        session()->flash('success', 'Drug Duration Added Successfully');
        return redirect()->route('drugduration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DrugDuration  $drugDuration
     * @return \Illuminate\Http\Response
     */
    public function show(DrugDuration $drugDuration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DrugDuration  $drugDuration
     * @return \Illuminate\Http\Response
     */
    public function edit(DrugDuration $drugDuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DrugDuration  $drugDuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DrugDuration $drugDuration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DrugDuration  $drugDuration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $duration = DrugDuration::find($id);
        $duration->delete();
        session()->flash('success', 'Drug Duration Deleted Successfully');
        return redirect()->route('drugduration.index');
    }
}
