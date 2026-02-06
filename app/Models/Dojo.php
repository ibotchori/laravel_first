<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    // Define which attributes can be mass assigned for security
    protected $fillable = ['name', 'description', 'location'];

    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    // Define the relationship to the Ninja model
    public function ninjas()
    {
        return $this->hasMany(Ninja::class);
    }
}
