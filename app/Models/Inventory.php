<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    protected $fillable = [
        'quantity',
        'location_id',
        'product_id',
    ];
}
