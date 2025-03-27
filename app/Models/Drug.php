<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Drug
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Drug withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Drug extends Model
{
    use SoftDeletes;

    protected $table = 'drugs';

    protected $casts = [
        'quantity' => 'int',
        'created_by' => 'int',
        'updated_by' => 'int',
        'deleted_by' => 'int',
    ];

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Get the medicalHistory that owns the Drug
     */
    public function medicalHistory(): BelongsTo
    {
        return $this->belongsTo(MedicalHistory::class);
    }
}
