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
        'date_received',
        'case_number',
        'class',
        'file',
        'date_settlement',
        'comments',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_received',
        'date_settlement',
    ];

    /**
     * Get the court that owns the record.
     */
    public function court()
    {
        return $this->belongsTo('App\Models\Court', 'court_id');
    }
}