<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class DatabaseBackup
 *
 * @package App\Models
 * * @property string $file_name
 * @property int $id
 * @property string $file_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup query()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseBackup whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class DatabaseBackup extends Model
{
    use HasFactory;


    protected $table = 'database_backups';

    protected $guarded = [];

}
