<?php

namespace App\Models;

use App\Advertise;
use App\Models\Traits\DatesAttributes;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int $ad_id
 * @property int $user_id
 * @property string $amount
 * @property string $payment_method
 * @property string $status
 * @property string $currency
 * @property string $token_id
 * @property string $card_last4
 * @property string $card_id
 * @property string $client_ip
 * @property string $charge_id_or_token
 * @property string $payer_email
 * @property string $description
 * @property string $local_transaction_id
 * @property int $payment_created
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Advertise $ads
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCardLast4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereChargeIdOrToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereClientIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereLocalTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 * @mixin \Eloquent
 * @property int $advertise_id
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAdvertiseId($value)
 */
class Payment extends Model
{
    use HasFactory, DatesAttributes;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */

    public function ads()
    {
        return $this->belongsTo(Advertise::class,'advertise_id','id')->withoutGlobalScopes();
    }

    /**
     * @return BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */

    public function created_at_datetime()
    {
        return $this->createdAt();
    }

    /**
     * @return string
     */

    public function payment_completed_at()
    {
        return $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom') . ' ' . get_option('time_format_custom'));
    }


}
