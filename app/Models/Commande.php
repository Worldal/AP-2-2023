<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commande
 * 
 * @property int $ID_COMMANDE
 * @property int $ID_COMPTE
 * @property bool $FACTURE
 * @property Carbon $DATE_COMMANDE
 * 
 * @property Client $client
 * @property Collection|Commander[] $commanders
 * @property Emporter $emporter
 * @property Place $place
 *
 * @package App\Models
 */
class Commande extends Model
{
	protected $table = 'commande';
	protected $primaryKey = 'ID_COMMANDE';
	public $timestamps = false;

	protected $casts = [
		'ID_COMPTE' => 'int',
		'FACTURE' => 'bool'
	];

	protected $dates = [
		'DATE_COMMANDE'
	];

	protected $fillable = [
		'ID_COMPTE',
		'FACTURE',
		'DATE_COMMANDE'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'ID_COMPTE');
	}

	public function commanders()
	{
		return $this->hasMany(Commander::class, 'ID_COMMANDE');
	}

	public function emporter()
	{
		return $this->hasOne(Emporter::class, 'ID_COMMANDE');
	}

	public function place()
	{
		return $this->hasOne(Place::class, 'ID_COMMANDE');
	}
}
