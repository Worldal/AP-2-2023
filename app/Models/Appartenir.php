<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appartenir
 * 
 * @property int $ID_PLAT
 * @property int $ID_CATEGORIE
 * 
 * @property Categorie $categorie
 * @property Plat $plat
 *
 * @package App\Models
 */
class Appartenir extends Model
{
	protected $table = 'appartenir';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PLAT' => 'int',
		'ID_CATEGORIE' => 'int'
	];

	public function categorie()
	{
		return $this->belongsTo(Categorie::class, 'ID_CATEGORIE');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}
}
