<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\City
 *
 * @method static create(array $array)
 * @property int $id
 * @property string $city_name
 * @property int|null $state_id
 * @property-read \App\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }



}
