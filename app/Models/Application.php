<?php

namespace App\Models;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
     * Get user class relationship
     *
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
