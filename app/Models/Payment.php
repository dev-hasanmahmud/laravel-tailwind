<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'direction',
        'method',
        'status',
    ];

    /**
     * The user associated with the payment (affiliate or advertiser).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
