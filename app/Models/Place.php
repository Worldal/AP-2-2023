<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Doctrine\DBAL\Query;
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
class Place extends Model
{
	protected $fillable = [
		'ID_COMMANDE',
		'ID_COMPTE',
		'NUM_TABLE',
		'FACTURE',
		'DATE_COMMANDE'
	];

	public function places()
	{
		return $this->hasMany(QuantitePlatPlace::class, 'quantite_plat_place', 'ID_PLAT', 'ID_COMMANDE_PLACE')
					->withPivot('QUANTITE');
	}
}
