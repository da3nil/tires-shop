<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * App\Order
 *
 * @property int $id
 * @property string $identifier
 * @property string $name
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    protected $fillable = [
        'identifier',
        'name',
        'email',
        'address',
        'phone',
        'content',
        'total'
    ];

    public function orderPositions()
    {
        return $this->hasMany(OrderPosition::class, 'order_id')->with(['tire']);
    }
}
