<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckupType extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that should be protected.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'abbreviated_word',
        'description',
    ];

    /**
     * Get checkup_type relation to applications table.
     *
     * @return HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

}
