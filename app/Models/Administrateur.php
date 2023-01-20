<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrateur
 * 
 * @property int $ID_COMPTE
 * @property bool $ESTDIRIGEANT
 * 
 * @property Compte $compte
 *
 * @package App\Models
 */
class Administrateur extends Model
{
	protected $table = 'administrateur';
	protected $primaryKey = 'ID_COMPTE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPTE' => 'int',
		'ESTDIRIGEANT' => 'bool'
	];

	protected $fillable = [
		'ESTDIRIGEANT'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class, 'ID_COMPTE');
	}
}
