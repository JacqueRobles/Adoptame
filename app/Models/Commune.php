<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = [
        'commune_name',
        'organization_id',
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

}
