<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vote
 *
 * @property int $id
 * @property Carbon $date
 * @property Participant $id_part
 * @property Bulletin $id_bulletin
 * @property Election $id_election
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Bulletin[] $bulletins
 * @property Collection|Election[] $elections
 * @property Collection|Participant[] $participants
 *
 * @package App\Models
 */
class Vote extends Model
{
    use HasFactory;
	protected $table = 'votes';

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'date'
	];

	public function bulletins()
	{
		return $this->hasMany(Bulletin::class, 'id_vote');
	}

	public function elections()
	{
		return $this->hasMany(Election::class, 'id_vote');
	}

	public function participants()
	{
		return $this->hasMany(Participant::class, 'id_vote');
	}
}
