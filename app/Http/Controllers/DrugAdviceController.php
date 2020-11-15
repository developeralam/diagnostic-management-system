<?php

namespace App\Http\Controllers;

use App\Models\DrugAdvice;
use Illuminate\Http\Request;

class DrugAdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drug-advice.index');
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
            'drug_advice' => 'required|string',
            'status' =>'required|integer',
        ]);
        $drugAdvice = new DrugAdvice;
        $drugAdvice->drug_advice = $request->drug_advice;
        $drugAdvice->status = $request->status;
        $drugAdvice->save();
        session()->flash('success', 'Drug Advice Added Successfull');
        return redirect()->route('drugadvice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DrugAdvice  $drugAdvice
     * @return \Illuminate\Http\Response
     */
    public function show(DrugAdvice $drugAdvice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DrugAdvice  $drugAdvice
     * @return \Illuminate\Http\Response
     */
    public function edit(DrugAdvice $drugAdvice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DrugAdvice  $drugAdvice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DrugAdvice $drugAdvice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DrugAdvice  $drugAdvice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $drugAdvice = DrugAdvice::find($id);
        $drugAdvice->delete();
        session()->flash('success', 'Drug Advice Delted Successfull');
        return redirect()->route('drugadvice.index');
    }
}
