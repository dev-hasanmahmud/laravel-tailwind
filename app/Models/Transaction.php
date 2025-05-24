<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'campaign_id',
        'amount',
        'transaction_type',
        'status',
    ];

    /**
     * The user (Affiliate or Advertiser) related to this transaction.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The campaign related to this transaction.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
