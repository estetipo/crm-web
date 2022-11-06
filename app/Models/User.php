<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $url_photo
 * @property string $api_token
 * @property string $fb_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Appoinment[] $appoinments
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';

	protected $hidden = [
		'password',
		'api_token',
		'fb_token'
	];

	protected $fillable = [
		'name',
		'last_name',
		'email',
		'password',
		'url_photo',
		'api_token',
		'fb_token'
	];

	public function appoinments()
	{
		return $this->hasMany(Appoinment::class, 'fk_id_user');
	}
}
