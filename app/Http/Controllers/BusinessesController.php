<?php

namespace App\Http\Controllers;
use App\Business;
use DB;
use Illuminate\Http\Request;

class BusinessesController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        return view('businesses.index', compact('businesses'));
    }

    public function show($id)
    {
        $business = Business::find($id);
        return view('businesses.show', compact('business'));
    }
}