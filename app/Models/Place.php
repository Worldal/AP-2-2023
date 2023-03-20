<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Place
 * 
 * @property int $ID_COMMANDE
 * @property int $ID_COMPTE
 * @property int $NUM_TABLE
 * @property bool $FACTURE
 * @property Carbon $DATE_COMMANDE
 * 
 * @property Compte $compte
 * @property Collection|Plat[] $plats
 *
 * @package App\Models
 */
class Place extends Model
{
	protected $table = 'place';
	protected $primaryKey = 'ID_COMMANDE';
	public $timestamps = false;

	protected $casts = [
		'ID_COMPTE' => 'int',
		'NUM_TABLE' => 'int',
		'FACTURE' => 'bool'
	];

	protected $dates = [
		'DATE_COMMANDE'
	];

	protected $fillable = [
		'ID_COMPTE',
		'NUM_TABLE',
		'FACTURE',
		'DATE_COMMANDE'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class, 'ID_COMPTE');
	}

	public function plats()
	{
		return $this->belongsToMany(Plat::class, 'quantite_plat_place', 'ID_COMMANDE_PLACE', 'ID_PLAT')
					->withPivot('QUANTITE');
	}
}
