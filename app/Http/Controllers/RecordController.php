<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of all records.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $records = Record::paginate(10); // Assuming 10 records per page
        return view('all-records', compact('records'));
    }
}
