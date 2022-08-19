<?php

namespace App;

use App\Models\Payment;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * App\Advertise
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property int $category_id
 * @property int $sub_category_id
 * @property int $brand_id
 * @property string $type
 * @property string $ad_condition
 * @property string $model
 * @property string $price
 * @property string $is_negotiable
 * @property string $seller_name
 * @property string $seller_email
 * @property string $seller_phone
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property string $address
 * @property string $video_url
 * @property string $status
 * @property string $price_plan
 * @property string $mark_ad_urgent
 * @property int $view
 * @property int $max_impression
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Advertise newModelQuery()
 * @method static Builder|Advertise newQuery()
 * @method static Builder|Advertise query()
 * @method static Builder|Advertise whereAdCondition($value)
 * @method static Builder|Advertise whereAddress($value)
 * @method static Builder|Advertise whereBrandId($value)
 * @method static Builder|Advertise whereCategoryId($value)
 * @method static Builder|Advertise whereCityId($value)
 * @method static Builder|Advertise whereCountryId($value)
 * @method static Builder|Advertise whereCreatedAt($value)
 * @method static Builder|Advertise whereDescription($value)
 * @method static Builder|Advertise whereId($value)
 * @method static Builder|Advertise whereIsNegotiable($value)
 * @method static Builder|Advertise whereMarkAdUrgent($value)
 * @method static Builder|Advertise whereMaxImpression($value)
 * @method static Builder|Advertise whereModel($value)
 * @method static Builder|Advertise wherePrice($value)
 * @method static Builder|Advertise wherePricePlan($value)
 * @method static Builder|Advertise whereSellerEmail($value)
 * @method static Builder|Advertise whereSellerName($value)
 * @method static Builder|Advertise whereSellerPhone($value)
 * @method static Builder|Advertise whereSlug($value)
 * @method static Builder|Advertise whereStateId($value)
 * @method static Builder|Advertise whereStatus($value)
 * @method static Builder|Advertise whereSubCategoryId($value)
 * @method static Builder|Advertise whereTitle($value)
 * @method static Builder|Advertise whereType($value)
 * @method static Builder|Advertise whereUpdatedAt($value)
 * @method static Builder|Advertise whereUserId($value)
 * @method static Builder|Advertise whereVideoUrl($value)
 * @method static Builder|Advertise whereView($value)
 * @mixin Eloquent
 * @property-read Brand|null $brand
 * @property-read Category $category
 * @property-read City|null $city
 * @property-read Country $country
 * @property-read Media|null $feature_img
 * @property-read Media|null $image
 * @property-read Collection|Media[] $media_img
 * @property-read int|null $media_img_count
 * @property-read Collection|ReportAdvertise[] $reports
 * @property-read int|null $reports_count
 * @property-read State $state
 * @property-read SubCategory $subCategory
 * @property-read User $user
 * @method static Builder|Advertise active()
 * @method static Builder|Advertise activePremium()
 * @method static Builder|Advertise activeRegular()
 * @method static Builder|Advertise activeUrgent()
 * @method static Builder|Advertise adsByStatus($status)
 * @method static Builder|Advertise business()
 * @method static Builder|Advertise personal()
 * @property string|null $payment_status due, paid
 * @property string|null $approved_date
 * @property string|null $expire_date
 * @property-read Payment|null $payment
 * @property-read Collection|Payment[] $payments
 * @property-read int|null $payments_count
 * @method static Builder|Advertise whereApprovedDate($value)
 * @method static Builder|Advertise whereExpireDate($value)
 * @method static Builder|Advertise wherePaymentStatus($value)
 */
class Advertise extends Model
{
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsTo
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * @return BelongsTo
     */
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActivePremium($query)
    {
        return $query->whereStatus('1')->wherePricePlan('premium');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActiveRegular($query)
    {
        return $query->whereStatus('1')->wherePricePlan('regular');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActiveUrgent($query)
    {
        return $query->whereStatus('1')->whereMarkAdUrgent('1');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->whereStatus('1');
    }

    public function scopeAdsByStatus($query, $status)
    {
        return $query->whereUserId(auth::user()->id)->whereStatus($status);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeBusiness($query)
    {
        return $query->whereType('business');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopePersonal($query)
    {
        return $query->whereType('personal');
    }

    /**
     * @return HasOne
     */

    public function feature_img()
    {
        $feature_img = $this->hasOne(Media::class)->whereIsFeature('1');
        if (!$feature_img) {
            $feature_img = $this->hasOne(Media::class)->first();
        }
        return $this->hasOne(Media::class);
    }

    /**
     * @return mixed
     */

    public function media_img()
    {
        return $this->hasMany(Media::class, 'advertise_id')->whereType('image');
    }

    public function image()
    {
        return $this->hasOne(Media::class, 'advertise_id')->whereType('image');
    }


    /**
     * @return bool
     */

    public function isPublished()
    {
        if ($this->status == 1)
            return true;
        return false;
    }

    /**
     * @return string
     */
    public function postingDateTime()
    {
        return $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom') . ' ' . get_option('time_format_custom'));
    }


    /**
     * @return string
     */
    public function adsStatus()
    {
        $status = $this->status;
        $html = '';
        switch ($status) {
            case 0:
                $html = '<span class="text-warning">Awaiting for moderation</span>';
                break;
            case 1:
                $html = '<span class="text-success">Published</span>';
                break;
            case 2:
                $html = '<span class="text-danger">Blocked</span>';
                break;
            case 3:
                $html = '<span class="text-info">Archived</span>';
                break;
        }
        echo $html;
    }

    /**
     * @return bool
     */

    public function isMyFavorite()
    {
        if (!Auth::check())
            return false;
        $user = Auth::user();

        $favorite = Favourite::whereUserId($user->id)->whereAdId($this->id)->first();
        if ($favorite) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return HasMany
     */

    public function reports()
    {
        return $this->hasMany(ReportAdvertise::class, 'advertise_id');
    }


    public function is_my_favorite()
    {
        if (!Auth::check())
            return false;
        $user = Auth::user();

        $favorite = Favourite::whereUserId($user->id)->whereAdvertiseId($this->id)->first();
        if ($favorite) {
            return true;
        } else {
            return false;
        }
    }


    public function increase_impression()
    {
        $this->max_impression = $this->max_impression + 1;
        $this->save();
    }


    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'advertise_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'advertise_id')->orderBy('id', 'DESC');
    }


}
