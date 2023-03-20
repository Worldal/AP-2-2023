<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuantitePlatEmporter
 * 
 * @property int $ID_PLAT
 * @property int $ID_COMMANDE_EMPORTER
 * @property int $QUANTITE
 * 
 * @property Plat $plat
 * @property Emporter $emporter
 *
 * @package App\Models
 */
class QuantitePlatEmporter extends Model
{
	protected $table = 'quantite_plat_emporter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PLAT' => 'int',
		'ID_COMMANDE_EMPORTER' => 'int',
		'QUANTITE' => 'int'
	];

	protected $fillable = [
		'QUANTITE'
	];

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}

	public function emporter()
	{
		return $this->belongsTo(Emporter::class, 'ID_COMMANDE_EMPORTER');
	}
}
