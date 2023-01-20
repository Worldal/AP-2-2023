<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Allergene
 * 
 * @property int $ID_ALLERGENE
 * @property string $LABEL_ALLERGENE
 * 
 * @property Collection|Contenir[] $contenirs
 *
 * @package App\Models
 */
class Allergene extends Model
{
	protected $table = 'allergene';
	protected $primaryKey = 'ID_ALLERGENE';
	public $timestamps = false;

	protected $fillable = [
		'LABEL_ALLERGENE'
	];

	public function contenirs()
	{
		return $this->hasMany(Contenir::class, 'ID_ALLERGENE');
	}
}
