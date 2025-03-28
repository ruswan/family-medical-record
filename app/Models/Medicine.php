<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medicine
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Medicine extends Model
{
    use SoftDeletes;

    protected $table = 'medicines';

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
     * Get the medicalHistory that owns the Medicine
     */
    public function medicalHistory(): BelongsTo
    {
        return $this->belongsTo(MedicalHistory::class);
    }
}