<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @method static create(array $array)
 * @property int $id
 * @property string $state_name
 * @property int|null $country_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \App\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereStateName($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    protected $guarded = [];
    public $timestamps = false;


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'state_id');
    }
}
