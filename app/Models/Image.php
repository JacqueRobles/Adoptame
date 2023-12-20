<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Pet;

class Image extends Model
{
    use HasFactory;

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

}
