<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Module
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $fk_id_sale
 * 
 * @property Sale|null $sale
 *
 * @package App\Models
 */
class Module extends Model
{
	protected $table = 'module';

	protected $casts = [
		'fk_id_sale' => 'int'
	];

	protected $fillable = [
		'name',
		'fk_id_sale'
	];

	public function sale()
	{
		return $this->belongsTo(Sale::class, 'fk_id_sale');
	}
}
