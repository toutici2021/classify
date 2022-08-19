<?php

namespace App;

use App\Models\Traits\DatesAttributes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string|null $mobile
 * @property string|null $gender
 * @property string|null $address
 * @property string|null $website
 * @property string|null $phone
 * @property string|null $photo
 * @property string|null $photo_storage
 * @property string|null $user_type
 * @property string|null $active_status
 * @property string|null $is_email_verified
 * @property string|null $activation_code
 * @property string|null $is_online
 * @property string $password
 * @property string|null $last_login
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActivationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsEmailVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhotoStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWebsite($value)
 * @mixin \Eloquent
 * @property string|null $description
 * @property string|null $last_login_ip
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $ads
 * @property-read int|null $ads_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $archivedAds
 * @property-read int|null $archived_ads_count
 * @property-read \App\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $favourite_ads
 * @property-read int|null $favourite_ads_count
 * @property-read mixed $full_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $pendingAds
 * @property-read int|null $pending_ads_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Advertise[] $publishedAds
 * @property-read int|null $published_ads_count
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginIp($value)
 * @property string|null $slug
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSlug($value)
 */
class User extends Authenticatable
{
    use Notifiable, DatesAttributes;


    const STATUS_PENDING = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;


    protected $dates = ['created_at', 'updated_at', 'last_login'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    public function user_status()
    {
        $status = $this->active_status;

        $user_status = '';
        switch ($status) {
            case '0':
                $user_status = 'Pending';
                break;
            case '1':
                $user_status = 'Active';
                break;
            case '2':
                $user_status = 'Block';
                break;
        }
        return $user_status;
    }


    public function is_admin()
    {
        if ($this->user_type == 'admin') {
            return true;
        }
        return false;
    }


    public function signed_up_datetime()
    {
        return $this->createdAt();
    }


    public function last_login_datetime()
    {
        return $this->getLastLogin();
    }


    public function ads()
    {
        return $this->hasMany(Advertise::class);
    }

    public function favourite_ads()
    {
        return $this->belongsToMany(Advertise::class, 'favourites');
    }

    public function publishedAds()
    {
        return $this->hasMany(Advertise::class)->where('status', '1');
    }

    public function pendingAds()
    {
        return $this->hasMany(Advertise::class)->where('status', '0');
    }

    public function archivedAds()
    {
        return $this->hasMany(Advertise::class)->where('status', '3');
    }


    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function joinedDateTime()
    {
        return $this->createdAt();
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->photo =  'public/uploads/profile/default.png';
        });
    }


}
