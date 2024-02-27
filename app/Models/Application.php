<?php

namespace App\Models;

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
        'request_by',
        'handle_by',
        'purposes',
        'requested_at',
        'status',
        'approved_at',
        'rejected_at'
    ];

    

}
