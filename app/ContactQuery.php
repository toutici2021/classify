<?php

namespace App;

use App\Models\Traits\DatesAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\ContactQuery
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactQuery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ContactQuery extends Model
{

    use DatesAttributes;

    protected $guarded = [];

    public function created_at_datetime()
    {
        return $this->createdAt();
    }

}
