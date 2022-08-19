<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Meta
 *
 * @property int $id
 * @property string $url_name
 * @property string $meta_title
 * @property string $meta_description
 * @property string|null $meta_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Meta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meta query()
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meta whereUrlName($value)
 * @mixin \Eloquent
 */
class Meta extends Model
{
    use HasFactory;
}
