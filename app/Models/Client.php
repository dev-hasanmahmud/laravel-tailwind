<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'advertiser_id',
        'domain',
    ];

    /**
     * The advertiser who owns this domain.
     */
    public function advertiser()
    {
        return $this->belongsTo(User::class, 'advertiser_id');
    }
}
