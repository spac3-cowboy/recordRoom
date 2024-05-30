<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court; // Replace with your actual Court model if different

class DashboardController extends Controller
{
    public function index()
    {
        $courts = Court::all();
        return view('dashboard', compact('courts'));
    }
}