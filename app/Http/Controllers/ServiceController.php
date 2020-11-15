<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hospitalservice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospitalservice.create');
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
            'service_name' => 'required|string',
            'service_code' => 'required|integer',
            'service_price' => 'required|integer',
            'service_category' => 'required|integer',
            'status' => 'required|integer',
        ]);
        $service = new Service;
        $service->service_name = $request->service_name;
        $service->service_code = $request->service_code;
        $service->service_price = $request->service_price;
        $service->service_category = $request->service_category;
        $service->status = $request->status;
        $service->save();
        session()->flash('success', 'Service Inserted Successfully');
        return redirect()->route('hospitalservice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('hospitalservice.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'service_name' => 'required|string',
            'service_code' => 'required|integer',
            'service_price' => 'required|integer',
            'service_category' => 'required|integer',
            'status' => 'required|integer',
        ]);
        $service = Service::find($id);
        $service->service_name = $request->service_name;
        $service->service_code = $request->service_code;
        $service->service_price = $request->service_price;
        $service->service_category = $request->service_category;
        $service->status = $request->status;
        $service->save();
        session()->flash('success', 'Service Updated Successfully');
        return redirect()->route('hospitalservice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        session()->flash('success', 'Service Deleted Successfully');
        return redirect()->route('hospitalservice.index');
    }
}
