<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
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
        'user_id',
        'patient_id',
        'doctor_id',
        'purposes',
        'height_body',
        'mass_body',
        'blod_type',
        'blod_pressure',
        'colesterol',
        'blod_sugar',
        'requested_at',
        'status',
        'approved_at',
        'rejected_at'
    ];

    /**
     * Get user class relationship
     *
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get patient class relationship
     *
     * @return BelongsTo
     */
    public function patients(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    /**
     * Get doctor class relationship
     *
     * @return BelongsTo
     */
    public function doctors(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    /**
     * Set date attribute when storing data.
     *
     * @var array
     */
    protected $casts = [
        'requested_at' => 'datetime',
    ];

}
