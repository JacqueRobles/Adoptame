<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Organization;
use app\Models\Image;
use app\Models\User as Person;

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
        'profile_photo_path'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function profilePhoto()
    {
        return $this->belongsTo(Image::class, 'profile_photo_id');
    }


    public function adopter()
    {
        return $this->belongsTo(Person::class, 'adopter_id');
    }


}