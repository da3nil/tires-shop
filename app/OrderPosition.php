<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPosition extends Model
{
    protected $fillable = [
        'order_id',
        'tire_id'
    ];

    public function tire()
    {
        return $this->belongsTo(Tire::class, 'tire_id');
    }
}
