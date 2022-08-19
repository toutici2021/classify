<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ReportAdvertise
 *
 * @property int $id
 * @property int $advertise_id
 * @property string $reason
 * @property string $email
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereAdvertiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportAdvertise whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Advertise $ad
 * @property-read \App\Advertise $advertise
 */
class ReportAdvertise extends Model
{
    protected $guarded = [];

    public function advertise()
    {
        return $this->belongsTo(Advertise::class);
    }

    public function posting_datetime()
    {
        return $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom') . ' ' . get_option('time_format_custom'));
    }
}
