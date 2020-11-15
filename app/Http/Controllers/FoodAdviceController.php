<?php

namespace App\Http\Controllers;

use App\Models\FoodAdvice;
use Illuminate\Http\Request;

class FoodAdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('food-advice.index');
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
            'food_name' => 'required|string',
            'status' =>'required|integer',
        ]);
        $foodAdvice = new FoodAdvice;
        $foodAdvice->food_name = $request->food_name;
        $foodAdvice->status = $request->status;
        $foodAdvice->save();
        session()->flash('success', 'Food Advice Added Successfull');
        return redirect()->route('foodadvice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodAdvice  $foodAdvice
     * @return \Illuminate\Http\Response
     */
    public function show(FoodAdvice $foodAdvice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodAdvice  $foodAdvice
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodAdvice $foodAdvice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodAdvice  $foodAdvice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodAdvice $foodAdvice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodAdvice  $foodAdvice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodAdvice = FoodAdvice::find($id);
        $foodAdvice->delete();
        session()->flash('success', 'Food Advice Deleted Successfull');
        return redirect()->route('foodadvice.index');
    }
}
