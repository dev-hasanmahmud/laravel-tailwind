<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffiliateLink extends Model
{
    protected $fillable = [
        'affiliate_id',
        'campaign_id',
        'tracking_id',
    ];

    /**
     * The affiliate user (marketer) who owns the link.
     */
    public function affiliate()
    {
        return $this->belongsTo(User::class, 'affiliate_id');
    }

    /**
     * The campaign this link is associated with.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
