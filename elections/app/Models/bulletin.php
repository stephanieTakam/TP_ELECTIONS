<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulletin
 * 
 * @property int $id
 * @property string $couleur
 * @property string $photo
 * @property int $id_vote
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Vote $vote
 *
 * @package App\Models
 */
class Bulletin extends Model
{
	protected $table = 'bulletins';

	protected $casts = [
		'id_vote' => 'int'
	];

	protected $fillable = [
		'couleur',
		'photo',
		'id_vote'
	];

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_vote');
	}
}
