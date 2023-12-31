<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organization;
use App\Models\Image;
use App\Models\User as Person;
use App\Models\Adoption;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'type',
        'biography',
        'feature',
        'adoption',
        'organization_id',
        'profile_photo_id',
        'adopter_id',  

    ];

    public function organization()
    {
        return $this->belongsTo(User::class, 'organization_id');
    }

    public function profilePhoto()
    {
        return $this->hasOne(Image::class, 'profile_photo_id');
    }


    public function adopter()
    {
        return $this->hasOne(Adoption::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'adopter_id');
    }

    public function petitions()
    {
        return $this->hasMany(Petition::class);
    }
}