<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appoinment
 * 
 * @property int $id
 * @property Carbon $date
 * @property Carbon $time
 * @property string $comment
 * @property int|null $fk_id_status
 * @property int|null $fk_id_user
 * @property int|null $fk_id_client
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Client|null $client
 * @property Status|null $status
 * @property User|null $user
 *
 * @package App\Models
 */
class Appoinment extends Model
{
	protected $table = 'appoinment';

	protected $casts = [
		'fk_id_status' => 'int',
		'fk_id_user' => 'int',
		'fk_id_client' => 'int'
	];

	protected $dates = [
		'date',
		'time'
	];

	protected $fillable = [
		'date',
		'time',
		'comment',
		'fk_id_status',
		'fk_id_user',
		'fk_id_client'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'fk_id_client');
	}

	public function status()
	{
		return $this->belongsTo(Status::class, 'fk_id_status');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_id_user');
	}
}
