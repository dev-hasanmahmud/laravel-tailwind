<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrafficLog extends Model
{
    protected $fillable = [
        'affiliate_link_id',
        'campaign_id',
        'product_id',
        'ip_address',
        'user_agent',
        'action_type',
    ];

    /**
     * The affiliate link that was used by the visitor.
     */
    public function affiliateLink()
    {
        return $this->belongsTo(AffiliateLink::class);
    }

    /**
     * The campaign that was tracked for this traffic.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * The product that the visitor landed on.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
