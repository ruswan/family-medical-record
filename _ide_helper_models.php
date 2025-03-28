<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereCheckDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereHospitalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereSickHistoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MedicalHistory whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Medicine> $medicines
 * @property-read int|null $medicines_count
 */
	class MedicalHistory extends \Eloquent {}
}

namespace App\Models{
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
 * @mixin \Eloquent
 * @property int $medical_history_id
 * @property-read \App\Models\MedicalHistory $medicalHistory
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medicine whereMedicalHistoryId($value)
 */
	class Medicine extends \Eloquent {}
}

namespace App\Models{
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
 * @mixin \Eloquent
 * @property-read mixed $duration
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SickType> $sickTypes
 * @property-read int|null $sick_types_count
 */
	class SickHistory extends \Eloquent {}
}

namespace App\Models{
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
 * @mixin \Eloquent
 */
	class SickType extends \Eloquent {}
}

namespace App\Models{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, \App\Models\SickHistory> $sickHistories
 * @property-read int|null $sick_histories_count
 * @property-read Collection<int, \App\Models\UserFamily> $userFamilies
 * @property-read int|null $user_families_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

