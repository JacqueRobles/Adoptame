<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InCome extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'amount',
        'start_date',
        'end_date',
        'status',
        'organization_id',
        'progress_ammount',
    ];
    
}
