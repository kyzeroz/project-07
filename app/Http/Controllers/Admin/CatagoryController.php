<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function catagory(){
        return view('backend.catagory.index');
    }
    
    public function create(){
        return view('backend.catagory.create');
    }
}