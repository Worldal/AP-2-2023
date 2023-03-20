<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 * 
 * @property int $ID_CLIENT
 * @property int $ID_PLAT
 * 
 * @property Compte $compte
 * @property Plat $plat
 *
 * @package App\Models
 */
class Favorite extends Model
{
	protected $table = 'favorite';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CLIENT' => 'int',
		'ID_PLAT' => 'int'
	];

	protected $fillable = [
		'ID_CLIENT',
		'ID_PLAT'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class, 'ID_CLIENT');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}
}
