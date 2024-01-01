<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'user_id',
        'description',
        'status',
        'email',
        'date'

    ];

    public function pets()
    {
        return $this->hasOne(Pet::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }



}
