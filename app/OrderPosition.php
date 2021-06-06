<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OrderPosition
 *
 * @property int $id
 * @property int $order_id
 * @property int $tire_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Tire $tire
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition whereTireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPosition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
