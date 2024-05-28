<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record; // Assuming your model for records is named Record

class AddRecordController extends Controller
{
    /**
     * Show the form for creating a new record.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('add-record.create');
    }

    /**
     * Store a newly created record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'serial_number' => 'required|string',
            'date_received' => 'required|date',
            'case_number' => 'required|string',
            'class' => 'required|string',
            'file' => 'required|string',
            'date_of_settlement' => 'required|date',
            'comments' => 'nullable|string',
        ]);

        // Create a new record instance
        $record = new Record(); //to do
        $record->serial_number = $request->serial_number;
        $record->date_received = $request->date_received;
        $record->case_number = $request->case_number;
        $record->class = $request->class;
        $record->file = $request->file;
        $record->date_of_settlement = $request->date_of_settlement;
        $record->comments = $request->comments;
        
        // Save the record
        $record->save();

        // Redirect back to the form with a success message
        return redirect()->route('add-record.create')->with('success', 'Record added successfully.');
    }
}