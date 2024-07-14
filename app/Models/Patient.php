<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory,
        SoftDeletes,
        HasUlids;

    /**
     * The attributes that should be protected.
     *
     * @var array
     */
    protected $fillable = [
        'nik',
        'name',
        'gender',
        'born_place',
        'born_date',
        'address',
        'occupation',
        'phone'
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

    /**
     * Get patient gender name.
     *
     * @return string
     */
    public function getGenderName(): string
    {
        return match ($this->gender) {
            1 => 'Laki-laki',
            2 => 'Perempuan'
        };
    }

    /**
     * Set date attribute when storing data.
     *
     * @var array
     */
    protected $casts = [
        'born_date' => 'datetime',
    ];
}
