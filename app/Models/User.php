<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Adoption;
use App\Models\Pet;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens, HasFactory, Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'commune_id',
        'profile_photo_path',
        'web',
    
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function adoptedPets()
    {
        return $this->hasMany(Pet::class, 'adopter_id');

    }

    public function adoptions()
    {
        return $this->hasMany(Adoption::class);
    }

    public function commune()
    {
        return $this->hasOne(Commune::class);
    }


    public function pets()      //for organization
    {
        return $this->hasMany(Pet::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function headquarter()
    {
        return $this->hasMany(Headquarter::class, 'organization_id');
    }
    
    public function income()
    {
        return $this->hasMany(Income::class, 'organization_id');
    }

    public function petitions()
    {
        return $this->hasMany(Petition::class, 'user_id');
    }

}
