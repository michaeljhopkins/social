<?php

namespace Social;

/**
 * Social\Lineup
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Client[] $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Contact[] $contacts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Post[] $posts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Username[] $usernames
 * @method static \Illuminate\Database\Query\Builder|\Social\Lineup whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Lineup whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Lineup whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Lineup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lineup extends BaseModel {

	public function clients() {
		return $this->belongsToMany( Client::class );
	}
	public function contacts() {
		return $this->belongsToMany( Contact::class );
	}
}
