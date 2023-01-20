<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Emporter
 * 
 * @property int $ID_COMMANDE
 * @property Carbon $DATE_RETRAIT
 * @property string $COMMENTAIRE
 * 
 * @property Commande $commande
 *
 * @package App\Models
 */
class Emporter extends Model
{
	protected $table = 'emporter';
	protected $primaryKey = 'ID_COMMANDE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMMANDE' => 'int'
	];

	protected $dates = [
		'DATE_RETRAIT'
	];

	protected $fillable = [
		'DATE_RETRAIT',
		'COMMENTAIRE'
	];

	public function commande()
	{
		return $this->belongsTo(Commande::class, 'ID_COMMANDE');
	}
}
