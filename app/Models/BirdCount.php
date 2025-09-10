<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirdCount extends Model
{
    /** @use HasFactory<\Database\Factories\BirdCountFactory> */
    use HasFactory;

    protected $table = 'bird_counts';
    protected $guarded = [];

}