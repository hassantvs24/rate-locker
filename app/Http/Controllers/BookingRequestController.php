<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingRequestController extends Controller
{
    public function index(Request $request){
        return view('booking_request');
    }
}
