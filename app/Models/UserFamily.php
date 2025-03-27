<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserFamily
 *
 * @property int $id
 * @property int $user_id
 * @property int $family_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read \App\Models\Family $family
 * @property-read \App\Models\User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereFamilyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserFamily withoutTrashed()
 *
 * @mixin \Eloquent
 */
class UserFamily extends Model
{
    use SoftDeletes;

    protected $table = 'user_families';

    protected $casts = [
        'user_id' => 'int',
        'family_id' => 'int',
        'created_by' => 'int',
        'updated_by' => 'int',
        'deleted_by' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'family_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Get the user that owns the UserFamily
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the family that owns the UserFamily
     */
    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }
}
