<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        return view('property_list');
    }

    public function property_view(){
        return view('property_single');
    }

    public function add_property(){
        return view('property_add');
    }

    public function property_room(){
        return view('single_room');
    }

}
