<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Plat
 * 
 * @property int $ID_PLAT
 * @property string $TITRE_PLAT
 * @property string $DESCRIPTION_PLAT
 * @property int $PRIX_HT
 * @property int $STOCK_PLAT
 * @property bool $ESTPLATDUJOUR
 * @property string $LIEN_IMG
 * 
 * @property Collection|Appartenir[] $appartenirs
 * @property Collection|Contenir[] $contenirs
 * @property Favorite $favorite
 * @property Collection|Emporter[] $emporters
 * @property Collection|Place[] $places
 * @property Collection|Reapprovisionnement[] $reapprovisionnements
 *
 * @package App\Models
 */
class Plat extends Model
{
	protected $table = 'plat';
	protected $primaryKey = 'ID_PLAT';
	public $timestamps = false;

	protected $casts = [
		'PRIX_HT' => 'int',
		'STOCK_PLAT' => 'int',
		'ESTPLATDUJOUR' => 'bool'
	];

	protected $fillable = [
		'TITRE_PLAT',
		'DESCRIPTION_PLAT',
		'PRIX_HT',
		'STOCK_PLAT',
		'ESTPLATDUJOUR',
		'LIEN_IMG'
	];

	public function appartenirs()
	{
		return $this->hasMany(Appartenir::class, 'ID_PLAT');
	}

	public function contenirs()
	{
		return $this->hasMany(Contenir::class, 'ID_PLAT');
	}

	public function favorite()
	{
		return $this->hasOne(Favorite::class, 'ID_PLAT');
	}

	public function emporters()
	{
		return $this->belongsToMany(Emporter::class, 'quantite_plat_emporter', 'ID_PLAT', 'ID_COMMANDE_EMPORTER')
					->withPivot('QUANTITE');
	}

	public function places()
	{
		return $this->belongsToMany(Place::class, 'quantite_plat_place', 'ID_PLAT', 'ID_COMMANDE_PLACE')
					->withPivot('QUANTITE');
	}

	public function reapprovisionnements()
	{
		return $this->hasMany(Reapprovisionnement::class, 'ID_PLAT');
	}
}
