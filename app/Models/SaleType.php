<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SaleType
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Sale[] $sales
 *
 * @package App\Models
 */
class SaleType extends Model
{
	protected $table = 'sale_type';

	protected $fillable = [
		'name'
	];

	public function sales()
	{
		return $this->hasMany(Sale::class, 'fk_id_type');
	}
}
