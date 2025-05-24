<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'client_id',
        'name',
        'slug',
        'product_url',
    ];

    /**
     * The client/domain this product belongs to.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
