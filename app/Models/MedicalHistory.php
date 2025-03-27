<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class MedicalHistory
 *
 * @property int $id
 * @property int $sick_history_id
 * @property \Illuminate\Support\Carbon $check_date
 * @property string|null $hospital_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SickHistory $sickHistory
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereCheckDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereHospitalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereSickHistoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class MedicalHistory extends Model
{
    protected $table = 'medical_histories';

    protected $casts = [
        'sick_history_id' => 'int',
        'check_date' => 'datetime',
    ];

    protected $fillable = [
        'sick_history_id',
        'check_date',
        'hospital_name',
    ];

    /**
     * Get the sickHistory that owns the MedicalHistory
     */
    public function sickHistory(): BelongsTo
    {
        return $this->belongsTo(SickHistory::class);
    }

    /**
     * Get all of the drugs for the MedicalHistory
     */
    public function drugs(): HasMany
    {
        return $this->hasMany(Drug::class);
    }
}
