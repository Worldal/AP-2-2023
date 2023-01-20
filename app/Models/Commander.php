<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Commander
 * 
 * @property int $ID_COMMANDE
 * @property int $ID_PLAT
 * @property int $QUANTITE
 * 
 * @property Commande $commande
 * @property Plat $plat
 *
 * @package App\Models
 */
class Commander extends Model
{
	protected $table = 'commander';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMMANDE' => 'int',
		'ID_PLAT' => 'int',
		'QUANTITE' => 'int'
	];

	protected $fillable = [
		'QUANTITE'
	];

	public function commande()
	{
		return $this->belongsTo(Commande::class, 'ID_COMMANDE');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}
}
