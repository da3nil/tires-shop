<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Brand
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @mixin \Eloquent
 */
class Brand extends Model
{
    protected $fillable = [
        'name'
    ];
}
