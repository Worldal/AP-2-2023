<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Place
 * 
 * @property int $ID_COMMANDE
 * @property int $NUM_TABLE
 * @property int $ID_COMPTE
 * 
 * @property Commande $commande
 * @property Serveur $serveur
 * @property Table $table
 *
 * @package App\Models
 */
class Place extends Model
{
	protected $table = 'place';
	protected $primaryKey = 'ID_COMMANDE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMMANDE' => 'int',
		'NUM_TABLE' => 'int',
		'ID_COMPTE' => 'int'
	];

	protected $fillable = [
		'NUM_TABLE',
		'ID_COMPTE'
	];

	public function commande()
	{
		return $this->belongsTo(Commande::class, 'ID_COMMANDE');
	}

	public function serveur()
	{
		return $this->belongsTo(Serveur::class, 'ID_COMPTE');
	}

	public function table()
	{
		return $this->belongsTo(Table::class, 'NUM_TABLE');
	}
}
