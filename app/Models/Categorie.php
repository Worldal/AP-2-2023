<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * 
 * @property int $ID_CATEGORIE
 * @property string $LABEL_CATEGORIE
 * 
 * @property Collection|Appartenir[] $appartenirs
 *
 * @package App\Models
 */
class Categorie extends Model
{
	protected $table = 'categorie';
	protected $primaryKey = 'ID_CATEGORIE';
	public $timestamps = false;

	protected $fillable = [
		'LABEL_CATEGORIE'
	];

	public function appartenirs()
	{
		return $this->hasMany(Appartenir::class, 'ID_CATEGORIE');
	}
}
