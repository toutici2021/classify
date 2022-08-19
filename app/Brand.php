<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Brand
 *
 * @method static where(string $string, string $brand_slug)
 * @method static create(array $array)
 * @method static whereId($id)
 * @property int $id
 * @property string $brand_name
 * @property string $brand_slug
 * @property int $category_id
 * @property int $product_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $ads
 * @property-read int|null $ads_count
 * @property-read \App\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Brand extends Model
{
    protected $guarded = [];


    public function ads()
    {
        return $this->hasMany(Advertise::class, 'brand_id');
    }
}
