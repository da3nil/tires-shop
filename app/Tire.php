<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tire
 *
 * @property int $id
 * @property string $name
 * @property int $width
 * @property float $profile
 * @property string $diameter
 * @property string $season
 * @property int $price
 * @property string $img
 * @property int $brand_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tire query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereSeason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tire whereWidth($value)
 * @mixin \Eloquent
 * @property-read \App\Brand $brand
 */
class Tire extends Model
{
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
