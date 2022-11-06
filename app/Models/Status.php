<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Appoinment[] $appoinments
 *
 * @package App\Models
 */
class Status extends Model
{
	protected $table = 'status';

	protected $fillable = [
		'name'
	];

	public function appoinments()
	{
		return $this->hasMany(Appoinment::class, 'fk_id_status');
	}
}
