<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Favourite
 *
 * @property int $id
 * @property int $user_id
 * @property int $advertise_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereAdvertiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereUserId($value)
 * @mixin \Eloquent
 */
class Favourite extends Model
{
    protected $guarded = [];
}
