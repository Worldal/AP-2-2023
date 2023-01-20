<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $ID_COMPTE
 * @property string $EMAIL
 * 
 * @property Compte $compte
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';
	protected $primaryKey = 'ID_COMPTE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPTE' => 'int'
	];

	protected $fillable = [
		'EMAIL'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class, 'ID_COMPTE');
	}

	public function commandes()
	{
		return $this->hasMany(Commande::class, 'ID_COMPTE');
	}
}
