<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    // Define which attributes can be mass assigned for security
    protected $fillable = ['name', 'skill', 'bio'];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;


    // Define the relationship to the Dojo model
    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
