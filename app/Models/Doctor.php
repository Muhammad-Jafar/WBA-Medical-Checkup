<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that should be protected.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sip',
        'nip',
        'verified'
    ];

    /**
     * Get Doctor relation to application table.
     *
     * @return HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

}
