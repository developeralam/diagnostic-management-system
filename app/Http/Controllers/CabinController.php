<?php

namespace App\Http\Controllers;

use App\Models\Cabin;
use Illuminate\Http\Request;

class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cabin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabin.create');
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
            'ward_id' => 'required|integer',
            'space_location' => 'required|string',
            'price' => 'required|string',
            'condition' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $cabin = new Cabin;
        $cabin->ward_id = $request->ward_id;
        $cabin->space_location = $request->space_location;
        $cabin->price = $request->price;
        $cabin->condition = $request->condition;
        $cabin->status = $request->status;
        $cabin->save();
        session()->flash('success', 'Cabin Inserted Successfully');
        return redirect()->route('cabin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function show(Cabin $cabin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabin = Cabin::find($id);
        return view('cabin.edit', compact('cabin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'ward_id' => 'required|integer',
            'space_location' => 'required|string',
            'price' => 'required|string',
            'condition' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $cabin = Cabin::find($id);
        $cabin->ward_id = $request->ward_id;
        $cabin->space_location = $request->space_location;
        $cabin->price = $request->price;
        $cabin->condition = $request->condition;
        $cabin->status = $request->status;
        $cabin->save();
        session()->flash('success', 'Cabin Updated Successfully');
        return redirect()->route('cabin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabin  $cabin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cabin = Cabin::find($id);
        $cabin->delete();
        session()->flash('success', 'Cabin Deleted Successfully');
        return redirect()->route('cabin.index');
    }
}
