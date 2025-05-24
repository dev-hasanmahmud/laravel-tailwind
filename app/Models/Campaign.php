<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'advertiser_id',
        'name',
        'type',
        'budget',
        'start_date',
        'end_date',
        'status',
    ];

    public $timestamps = false; // Because we only have created_at

    public function advertiser()
    {
        return $this->belongsTo(User::class, 'advertiser_id');
    }
}
