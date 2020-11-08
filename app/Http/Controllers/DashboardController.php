<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index Function
    public function index()
    {
    	return view('index');
    }
}
