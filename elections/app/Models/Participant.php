<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 * 
 * @property int $id
 * @property string $nom
 * @property int $num_cni
 * @property int $age
 * @property string $sexe
 * @property string $statut
 * @property int $id_region
 * @property int $id_vote
 * @property string $login
 * @property string $password
 * @property string|null $email
 * @property string $etat
 * @property string|null $telephone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Region $region
 * @property Vote $vote
 *
 * @package App\Models
 */
class Participant extends Model
{
	protected $table = 'participant';

	protected $casts = [
		'num_cni' => 'int',
		'age' => 'int',
		'id_region' => 'int',
		'id_vote' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nom',
		'num_cni',
		'age',
		'sexe',
		'statut',
		'id_region',
		'id_vote',
		'login',
		'password',
		'email',
		'etat',
		'telephone'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'id_region');
	}

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_vote');
	}
}
