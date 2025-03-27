<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SickHistory
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read Collection<int, \App\Models\MedicalHistory> $medicalHistories
 * @property-read int|null $medical_histories_count
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SickHistory withoutTrashed()
 *
 * @mixin \Eloquent
 */
class SickHistory extends Model
{
    use SoftDeletes;

    protected $table = 'sick_histories';

    protected $casts = [
        'user_id' => 'int',

        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'created_by' => 'int',
        'updated_by' => 'int',
        'deleted_by' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected function duration(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => $this->start_date->diffInDays($this->end_date),
        );
    }

    /**
     * Get the user that owns the SickHistory
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the medicalHistories for the SickHistory
     */
    public function medicalHistories(): HasMany
    {
        return $this->hasMany(MedicalHistory::class);
    }

    /**
     * The sickTypes that belong to the SickHistory
     */
    public function sickTypes(): BelongsToMany
    {
        return $this->belongsToMany(SickType::class)
            ->withPivot('id');
    }
}
