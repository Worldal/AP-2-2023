<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Serveur
 * 
 * @property int $ID_COMPTE
 * 
 * @property Compte $compte
 * @property Collection|Place[] $places
 *
 * @package App\Models
 */
class Serveur extends Model
{
	protected $table = 'serveur';
	protected $primaryKey = 'ID_COMPTE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPTE' => 'int'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class, 'ID_COMPTE');
	}

	public function places()
	{
		return $this->hasMany(Place::class, 'ID_COMPTE');
	}
}
