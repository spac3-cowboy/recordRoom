<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'court_records';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Define the fields that are allowed to be mass assignable
        'court_id',
        'serial_number',
        'date_of_receiving',
        'case_number',
        'class',
        'file',
        'date_of_settlement',
        'comments',
    ];
}
