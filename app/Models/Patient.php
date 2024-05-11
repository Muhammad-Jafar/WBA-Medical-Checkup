<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

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
        'occupation'
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
     * @param string $value
     * @return void
     */
    public function setDateAttribute(string $value): void
    {
        $this->attributes['born_date'] = date('Y-m-d', strtotime($value));
    }
}
