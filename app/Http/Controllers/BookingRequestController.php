<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingRequestController extends Controller
{
    public function index(Request $request){

        if ($request->queries == 'Search'){
            return view('property_search');
        }
        return view('booking_request');
    }
}
