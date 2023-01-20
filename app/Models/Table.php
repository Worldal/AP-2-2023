<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Table
 * 
 * @property int $NUM_TABLE
 * 
 * @property Collection|Place[] $places
 *
 * @package App\Models
 */
class Table extends Model
{
	protected $table = 'tables';
	protected $primaryKey = 'NUM_TABLE';
	public $timestamps = false;

	public function places()
	{
		return $this->hasMany(Place::class, 'NUM_TABLE');
	}
}
