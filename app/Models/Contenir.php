<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contenir
 * 
 * @property int $ID_PLAT
 * @property int $ID_ALLERGENE
 * 
 * @property Allergene $allergene
 * @property Plat $plat
 *
 * @package App\Models
 */
class Contenir extends Model
{
	protected $table = 'contenir';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PLAT' => 'int',
		'ID_ALLERGENE' => 'int'
	];

	public function allergene()
	{
		return $this->belongsTo(Allergene::class, 'ID_ALLERGENE');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}
}
