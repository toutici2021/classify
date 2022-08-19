<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Inquiry_reply
 *
 * @property int $id
 * @property int $inquiry_id
 * @property int $user_from
 * @property int $user_to
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Inquiry $inquiry
 * @property-read User $userFrom
 * @property-read User $userTo
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply query()
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereInquiryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereUserFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inquiry_reply whereUserTo($value)
 * @mixin \Eloquent
 */
class Inquiry_reply extends Model
{
    use HasFactory;

    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }

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
}
