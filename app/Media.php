<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Media
 *
 * @property int $id
 * @property int $user_id
 * @property int $advertise_id
 * @property string $media_name
 * @property string $type
 * @property string $is_feature
 * @property string $storage
 * @property string $ref
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereAdvertiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsFeature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMediaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUserId($value)
 * @mixin \Eloquent
 * @property int|null $post_id
 * @method static \Illuminate\Database\Eloquent\Builder|Media wherePostId($value)
 */
class Media extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->user_id =  auth()->user()->id;
        });
    }
}


