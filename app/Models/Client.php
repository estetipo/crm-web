<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $url_image
 * @property string $contact_email
 * @property string $contact_phone
 * @property int|null $fk_id_address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Address|null $address
 * @property Collection|Appoinment[] $appoinments
 * @property Collection|ModuleDetail[] $module_details
 * @property Collection|Sale[] $sales
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';

	protected $casts = [
		'fk_id_address' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'url_image',
		'contact_email',
		'contact_phone',
		'fk_id_address'
	];

	public function address()
	{
		return $this->belongsTo(Address::class, 'fk_id_address');
	}

	public function appoinments()
	{
		return $this->hasMany(Appoinment::class, 'fk_id_client');
	}

	public function module_details()
	{
		return $this->hasMany(ModuleDetail::class, 'fk_id_client');
	}

	public function sales()
	{
		return $this->hasMany(Sale::class, 'fk_id_client');
	}
}
