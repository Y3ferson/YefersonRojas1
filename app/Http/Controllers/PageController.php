<?php

namespace Rimorsoft\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function boton()
    {
    	return view('vendor.adminlte.boton');
    } 

     public function about()
    {
    	return view('vendor.adminlte.about');
    }
}
