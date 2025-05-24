<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoutingRule extends Model
{
    protected $fillable = [
        'campaign_id',
        'product_id',
        'weight',
        'status',
    ];

    /**
     * The campaign this routing rule belongs to.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * The product this routing rule routes traffic to.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
