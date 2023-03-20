<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuantitePlatPlace
 * 
 * @property int $ID_PLAT
 * @property int $ID_COMMANDE_PLACE
 * @property int $QUANTITE
 * 
 * @property Plat $plat
 * @property Place $place
 *
 * @package App\Models
 */
class QuantitePlatPlace extends Model
{
	protected $table = 'quantite_plat_place';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PLAT' => 'int',
		'ID_COMMANDE_PLACE' => 'int',
		'QUANTITE' => 'int'
	];

	protected $fillable = [
		'QUANTITE'
	];

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}

	public function place()
	{
		return $this->belongsTo(Place::class, 'ID_COMMANDE_PLACE');
	}
}
