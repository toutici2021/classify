<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Country
 *
 * @method static create(array $array)
 * @property int $id
 * @property string $country_code
 * @property string $country_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @mixin \Eloquent
 */
class Country extends Model
{

    protected $guarded = [];

    public function states()
    {
        return $this->hasMany(State::class,'country_id');
    }
}
