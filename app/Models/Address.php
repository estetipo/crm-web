<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $state
 * @property string $town
 * @property string $colony
 * @property string $street
 * @property int $no_ext
 * @property int|null $no_int
 * @property string|null $lat
 * @property string|null $lng
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Client[] $clients
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'address';

	protected $casts = [
		'no_ext' => 'int',
		'no_int' => 'int'
	];

	protected $fillable = [
		'state',
		'town',
		'colony',
		'street',
		'no_ext',
		'no_int',
		'lat',
		'lng'
	];

	public function clients()
	{
		return $this->hasMany(Client::class, 'fk_id_address');
	}
}
