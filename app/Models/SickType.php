<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SickType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read Collection<int, \App\Models\SickHistory> $sickHistories
 * @property-read int|null $sick_histories_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickType withoutTrashed()
 *
 * @mixin \Eloquent
 */
class SickType extends Model
{
    use SoftDeletes;

    protected $table = 'sick_types';

    protected $casts = [
        'created_by' => 'int',
        'updated_by' => 'int',
        'deleted_by' => 'int',
    ];

    protected $fillable = [
        'name',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * The sickHistories that belong to the SickType
     */
    public function sickHistories(): BelongsToMany
    {
        return $this->belongsToMany(SickHistory::class)
            ->withPivot('id');
    }
}
