<?php

namespace App;

use App\Models\Traits\DatesAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Post
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @property string $slug
 * @property string $post_content
 * @property string|null $feature_image
 * @property string $type
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFeatureImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereShowInFooterMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereShowInHeaderMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @mixin \Eloquent
 * @property int $show_in_header_menu
 * @property int $show_in_footer_menu
 * @property-read \App\User|null $author
 */
class Post extends Model
{


    use DatesAttributes;

    protected $guarded = [];


    public function created_at_datetime()
    {
        return $this->createdAt();
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
