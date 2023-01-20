<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class Compte
 *
 * @property int $ID_COMPTE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $LOGIN
 * @property string $MOT_DE_PASSE
 *
 * @property Administrateur $administrateur
 * @property Client $client
 * @property Serveur $serveur
 *
 * @package App\Models
 */
class Compte extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'compte';
	protected $primaryKey = 'ID_COMPTE';
	public $timestamps = false;

	protected $fillable = [
		'NOM',
		'PRENOM',
		'LOGIN',
		'MOT_DE_PASSE'
	];

	public function administrateur()
	{
		return $this->hasOne(Administrateur::class, 'ID_COMPTE');
	}

	public function client()
	{
		return $this->hasOne(Client::class, 'ID_COMPTE');
	}

	public function serveur()
	{
		return $this->hasOne(Serveur::class, 'ID_COMPTE');
	}
}
