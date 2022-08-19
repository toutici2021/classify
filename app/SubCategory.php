<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubCategory
 *
 * @property int $id
 * @property string $category_name
 * @property string $category_slug
 * @property int $category_id
 * @property string $fa_icon
 * @property string $color_class
 * @property string|null $description
 * @property int $product_count
 * @property string|null $media_name
 * @property string $storage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $ads
 * @property-read int|null $ads_count
 * @property-read \App\Category $parentCategory
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCategorySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereColorClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereFaIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereMediaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubCategory extends Model
{
    protected $table = 'categories';

    public function parentCategory()
    {
        return $this->belongsTo(Category::class);
    }

    public function ads()
    {
        return $this->hasMany(Advertise::class, 'sub_category_id');
    }
}
