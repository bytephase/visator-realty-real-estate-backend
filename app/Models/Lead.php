<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'phone_number',
        'assigned_to',
        'created_by',
        'source',
        'status',
        'next_follow_up',
        'comment',
        'budget_id',
        'priority',
    ];

    protected $casts = [
        'next_follow_up' => 'datetime',
    ];
}
