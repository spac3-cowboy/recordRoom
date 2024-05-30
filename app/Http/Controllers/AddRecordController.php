<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Court;

class AddRecordController extends Controller
{
    public function create()
    {
        $courts = Court::all();
        return view('add-record', compact('courts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'court_id' => 'required|exists:courts,id',
            // Add your validation rules here
        ]);

        // Combine the date of receiving fields into a single date string
        $receiving_date = $request->input('receiving_year') . '-' . $request->input('receiving_month') . '-' . $request->input('receiving_day');

        // Combine the date of settlement fields into a single date string
        $settlement_date = $request->input('settlement_year') . '-' . $request->input('settlement_month') . '-' . $request->input('settlement_day');

        // Create a new record with the provided data
        $record = new Record();
        $record->court_id = $request->input('court_id');
        $record->serial_number = $request->input('serial_number');
        $record->date_received = date('Y-m-d', strtotime($receiving_date));
        $record->case_number = $request->input('case_number');
        $record->class = $request->input('class');
        $record->file = $request->input('file');
        $record->date_settlement = date('Y-m-d', strtotime($settlement_date));
        $record->comments = $request->input('comments');
        $record->save();

        // Redirect back with success message
        return redirect()->route('add-record')->with('success', 'Record added successfully.');
    }
}
