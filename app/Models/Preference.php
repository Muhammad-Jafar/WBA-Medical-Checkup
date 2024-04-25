<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    /**
     * The attributes that should be protected.
     *
     * @var array
     */
    protected $fillable = [
        'id_preferences',
        'name',
        'desc',
        'status',
        'input'
    ];
}
