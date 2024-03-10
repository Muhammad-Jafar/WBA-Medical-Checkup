<?php

namespace App\Models;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Application extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

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
     * @param string $value
     * @return void
     */
    public function setDateAttribute(string $value): void
    {
        $this->attributes['requested_at'] = date('Y-m-d', strtotime($value));
    }

}