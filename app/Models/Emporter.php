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
class Emporter extends Model
{
    // Permet de nommer la table de la base de données
    // Ici la table en base de données s'appelle "emporter"
    protected $table = 'emporter';

	protected $fillable = [
		'ID_COMMANDE',
		'ID_COMPTE',
		'DATE_RETRAIT',
        'COMMENTAIRE',
		'FACTURE',
		'DATE_COMMANDE'
	];

    // Désactive les colonnes created_at et updated_at (car elles ne sont pas présentes dans la table)
    public $timestamps = false;

	public function emporters()
	{
		return $this->hasMany(QuantitePlatEmporter::class, 'quantite_plat_emporter', 'ID_PLAT', 'ID_COMMANDE_EMPORTER')
					->withPivot('QUANTITE');
	}
}
