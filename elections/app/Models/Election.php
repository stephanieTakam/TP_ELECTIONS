<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Election
 *
 * @property int $id
 * @property Carbon $date
 * @property string $label
 * @property string $description
 * @property string $statut
 * @property int $id_vote
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Vote $vote
 *
 * @package App\Models
 */
class Election extends Model
{
	protected $table = 'elections';

	protected $casts = [
		'date' => 'datetime',
		'id_vote' => 'int'
	];

	protected $fillable = [
		'date',
		'label',
		'description',
		'statut',
		'id_vote'
	];

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_vote');
	}
}
