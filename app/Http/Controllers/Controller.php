<?php

namespace App\Http\Controllers;

use App\Models\BusinessCenter;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createReservation()
    {
        $business_centers = BusinessCenter::all();
        return view('create');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return view('dashboard', [
            'reservations' => $reservations
        ]);
    }
}
