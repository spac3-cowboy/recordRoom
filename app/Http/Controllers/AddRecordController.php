<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Court; // Include the Court model

class AddRecordController extends Controller
{
    /**
     * Show the form for creating a new record.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retrieve all courts to populate the dropdown
        $courts = Court::all();

        // Return the view with the $courts variable
        return view('add-record', compact('courts'));
    }

    /**
     * Store a newly created record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'court_id' => 'required|exists:courts,id',
            // Add your validation rules here
        ]);

        // Create a new record with the provided data
        Record::create([
            'court_id' => $request->court_id,
            
        ]); 

        // Redirect back with success message
        return redirect()->route('add-record')->with('success', 'Record added successfully.');
    }
}
