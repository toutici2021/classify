<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @method static where(string $string, string $slug)
 * @method static create(array $data)
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Brand[] $brands
 * @property-read int|null $brands_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $publishedAds
 * @property-read int|null $published_ads_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubCategory[] $sub_categories
 * @property-read int|null $sub_categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategorySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereColorClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFaIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereMediaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $guarded = [];


    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'category_brands', 'category_id', 'brand_id');
    }

    public function ads()
    {
        return $this->hasMany(Advertise::class, 'category_id');
    }

    public function publishedAds()
    {
        return $this->hasMany(Advertise::class, 'category_id')->where('expire_date', '>=', Carbon::now()->format("Y-m-d"))->where('status', '1');
    }
}
