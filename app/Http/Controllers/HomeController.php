<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Fetch appointments for the logged-in user
        $appointments = Appointment::where('email', Auth::user()->email)->get();

        // Pass the appointments to the view
        return view('home', compact('appointments'));
    }
}
