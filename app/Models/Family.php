<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Family
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read Collection<int, \App\Models\UserFamily> $userFamilies
 * @property-read int|null $user_families_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Family withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Family extends Model
{
    use SoftDeletes;

    protected $table = 'families';

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
     * Get all of the userFamilies for the Family
     */
    public function userFamilies(): HasMany
    {
        return $this->hasMany(UserFamily::class);
    }
}
