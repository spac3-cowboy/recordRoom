<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Check if the user is authenticated
        if ($request->user()) {
            // If authenticated, redirect to the dashboard
            return view('dashboard');
        }

        // If not authenticated, redirect to the login page
        return redirect()->route('login');
    }
}