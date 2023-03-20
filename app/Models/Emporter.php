<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Emporter
 * 
 * @property int $ID_COMMANDE
 * @property int $ID_COMPTE
 * @property Carbon $DATE_RETRAIT
 * @property string $COMMENTAIRE
 * @property bool $FACTURE
 * @property Carbon $DATE_COMMANDE
 * 
 * @property Compte $compte
 * @property Collection|Plat[] $plats
 *
 * @package App\Models
 */
class Emporter extends Model
{
	protected $table = 'emporter';
	protected $primaryKey = 'ID_COMMANDE';
	public $timestamps = false;

	protected $casts = [
		'ID_COMPTE' => 'int',
		'FACTURE' => 'bool'
	];

	protected $dates = [
		'DATE_RETRAIT',
		'DATE_COMMANDE'
	];

	protected $fillable = [
		'ID_COMPTE',
		'DATE_RETRAIT',
		'COMMENTAIRE',
		'FACTURE',
		'DATE_COMMANDE'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class, 'ID_COMPTE');
	}

	public function plats()
	{
		return $this->belongsToMany(Plat::class, 'quantite_plat_emporter', 'ID_COMMANDE_EMPORTER', 'ID_PLAT')
					->withPivot('QUANTITE');
	}
}
