<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record; // Replace with your actual Record model if different
use App\Models\Court; // Replace with your actual Court model if different

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $records = Record::where('court_id', $request->court)
                         ->where('case_number', 'like', '%' . $request->case_number . '%')
                         ->get();

        $courts = Court::all();

        return view('dashboard', compact('records', 'courts'));
    }
}