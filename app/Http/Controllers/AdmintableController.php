<?php

namespace App\Http\Controllers;
use App\Models\Register;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class AdmintableController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function retrivedata()
    {
               $users=User::select('*')->get();
                return view('admin/tables', ['users' => $users]);
    }


    public function vehicledata()
    {
               $users=Booking::select('*')->get();
               $users=Booking::select('*')->paginate(2);
                return view('admin/vehicle_table', ['users' => $users]);
    }

    public function billlingdata()
    {
               $users=Booking::select('*')->get();
                return view('admin/billling', ['users' => $users]);
    }


    public function update_vehicle()
    {
               $users=Booking::select('*')->where('id', '3')->first();
                return view('booking_update', ['users' => $users]);
    }
}
