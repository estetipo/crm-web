<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property int $id
 * @property Carbon $delivery_date
 * @property Carbon $register_date
 * @property int|null $fk_id_type
 * @property int|null $fk_id_client
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Client|null $client
 * @property SaleType|null $sale_type
 * @property Collection|Module[] $modules
 *
 * @package App\Models
 */
class Sale extends Model
{
	protected $table = 'sale';

	protected $casts = [
		'fk_id_type' => 'int',
		'fk_id_client' => 'int'
	];

	protected $dates = [
		'delivery_date',
		'register_date'
	];

	protected $fillable = [
		'delivery_date',
		'register_date',
		'fk_id_type',
		'fk_id_client'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'fk_id_client');
	}

	public function sale_type()
	{
		return $this->belongsTo(SaleType::class, 'fk_id_type');
	}

	public function modules()
	{
		return $this->hasMany(Module::class, 'fk_id_sale');
	}
}
