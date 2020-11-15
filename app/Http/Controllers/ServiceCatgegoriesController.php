<?php

namespace App\Http\Controllers;

use App\Models\ServiceCatgegories;
use Illuminate\Http\Request;

class ServiceCatgegoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servicecatgeories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicecatgeories.create');
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
            'category_name' => 'required|string',
            'status' => 'required|integer',
        ]);

        $category = new ServiceCatgegories;
        $category->category_name = $request->category_name;
        $category->status = $request->status;
        $category->save();
        session()->flash('success', 'Category Inserted Successfully');
        return redirect()->route('servicecatgeories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceCatgegories  $serviceCatgegories
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCatgegories $serviceCatgegories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCatgegories  $serviceCatgegories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = ServiceCatgegories::find($id);
        return view('servicecatgeories.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCatgegories  $serviceCatgegories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'category_name' => 'required|string',
            'status' => 'required|integer',
        ]);

        $category = ServiceCatgegories::find($id);
        $category->category_name = $request->category_name;
        $category->status = $request->status;
        $category->save();
        session()->flash('success', 'Category Updated Successfully');
        return redirect()->route('servicecatgeories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCatgegories  $serviceCatgegories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = ServiceCatgegories::find($id);
        $cat->delete();
        session()->flash('success', 'Category Deleted Succesfully');
        return redirect()->route('servicecatgeories.index');
    }
}
