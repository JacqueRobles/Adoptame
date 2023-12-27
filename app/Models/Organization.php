<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'web',
        'profile_photo_path',
    ];


    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }


    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

}