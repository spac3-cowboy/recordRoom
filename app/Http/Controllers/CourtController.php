<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court;

class CourtController extends Controller
{
    /**
     * Show the form for creating a new court.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('add-court');
    }

    /**
     * Store a newly created court in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new court record
        $court = new Court();
        $court->name = $request->name;
        $court->save();

        // Redirect back with success message
        return redirect()->route('add-court')->with('success', 'Court added successfully.');

    }
}