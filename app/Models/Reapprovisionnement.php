<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reapprovisionnement
 * 
 * @property int $ID_REAPPRO
 * @property int $ID_PLAT
 * @property int $QUANTITE_REAPPRO
 * @property Carbon $DATE_REAPPRO
 * 
 * @property Plat $plat
 *
 * @package App\Models
 */
class Reapprovisionnement extends Model
{
	protected $table = 'reapprovisionnement';
	protected $primaryKey = 'ID_REAPPRO';
	public $timestamps = false;

	protected $casts = [
		'ID_PLAT' => 'int',
		'QUANTITE_REAPPRO' => 'int'
	];

	protected $dates = [
		'DATE_REAPPRO'
	];

	protected $fillable = [
		'ID_PLAT',
		'QUANTITE_REAPPRO',
		'DATE_REAPPRO'
	];

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'ID_PLAT');
	}
}
