<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ModuleDetail
 * 
 * @property int $id
 * @property string $name
 * @property int $time
 * @property float $cost
 * @property int|null $fk_id_client
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Client|null $client
 *
 * @package App\Models
 */
class ModuleDetail extends Model
{
	protected $table = 'module_detail';

	protected $casts = [
		'time' => 'int',
		'cost' => 'float',
		'fk_id_client' => 'int'
	];

	protected $fillable = [
		'name',
		'time',
		'cost',
		'fk_id_client'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'fk_id_client');
	}
}
