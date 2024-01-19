<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_number',
        'V_type',
        'p_date',
        'in_time',
        'out_time',
        'slot',

    ];
}
