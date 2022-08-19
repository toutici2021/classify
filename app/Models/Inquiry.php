<?php

namespace App\Models;

use App\Advertise;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Inquiry
 *
 * @property int $id
 * @property int $user_from
 * @property int $user_to
 * @property int $unseen_user
 * @property int|null $advertise_id
 * @property string|null $subject
 * @property string $message
 * @property string $has_reply yes, no
 * @property string $read_status yes, no
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Advertise|null $advertise
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Inquiry_reply[] $replies
 * @property-read int|null $replies_count
 * @property-read User $unseenUser
 * @property-read User $userFrom
 * @property-read User $userTo
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry query()
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereAdvertiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereHasReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereReadStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereUnseenUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereUserFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry whereUserTo($value)
 * @mixin \Eloquent
 */
class Inquiry extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userFrom()
    {
        return $this->belongsTo(User::class, 'user_from');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function userTo()
    {
        return $this->belongsTo(User::class, 'user_to');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function unseenUser()
    {
        return $this->belongsTo(User::class, 'unseen_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function advertise()
    {
        return $this->belongsTo(Advertise::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function replies()
    {
        return $this->hasMany(Inquiry_reply::class);
    }

}
