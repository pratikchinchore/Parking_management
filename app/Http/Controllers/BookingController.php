<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // dd($request->slot);
        Booking::create([
            'vehicle_number' => $request->vehicle_number,
            'V_type' => $request->V_type,
            'p_date' => $request->p_date,
            'in_time' => $request->in_time,
            'out_time' => $request->out_time,
            'slot' => $request->slot,
        ]);
        return redirect('/allotment');
         }
    public function update(Request $request){
        echo("Pratik");
        echo($request->all());
    }
}
