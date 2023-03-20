<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class Compte
 *
 * @property int $ID_COMPTE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $LOGIN
 * @property string $MOT_DE_PASSE
 * @property int $TYPE_COMPTE
 * @property string|null $EMAIL
 * @property bool $ESTDIRIGEANT
 *
 * @property Collection|Emporter[] $emporters
 * @property Favorite $favorite
 * @property Collection|Place[] $places
 *
 * @package App\Models
 */
class Compte extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'compte';
	protected $primaryKey = 'ID_COMPTE';
	public $timestamps = false;

	protected $casts = [
		'TYPE_COMPTE' => 'int',
		'ESTDIRIGEANT' => 'bool'
	];

	protected $fillable = [
		'NOM',
		'PRENOM',
		'LOGIN',
		'MOT_DE_PASSE',
		'TYPE_COMPTE',
		'EMAIL',
		'ESTDIRIGEANT'
	];

    public function getAuthIdentifierName(){
        return "EMAIL";
    }

    public function getAuthPassword()
    {
        return $this->MOT_DE_PASSE;
    }

    public function getAuthIdentifier()
    {
        return $this->EMAIL;
    }

	public function emporters()
	{
		return $this->hasMany(Emporter::class, 'ID_COMPTE');
	}

	public function favorite()
	{
		return $this->hasOne(Favorite::class, 'ID_CLIENT');
	}

	public function places()
	{
		return $this->hasMany(Place::class, 'ID_COMPTE');
	}
}
