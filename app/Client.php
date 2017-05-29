<?php

namespace Social;

/**
 * Social\Client
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Lineup[] $lineups
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\Social\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Client whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Client whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Client whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Client extends BaseModel {

	public function users() {
		return $this->hasMany( User::class );
	}

	public function lineups() {
		return $this->belongsToMany( Lineup::class );
	}
}
