<?php

namespace Social;

/**
 * Social\Contact
 *
 * @property int                                                              $id
 * @property string                                                           $first_name
 * @property string                                                           $last_name
 * @property \Carbon\Carbon                                                   $created_at
 * @property \Carbon\Carbon                                                   $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Network[]  $networks
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Post[]     $posts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Username[] $usernames
 * @method static \Illuminate\Database\Query\Builder|\Social\Contact whereCreatedAt( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\Contact whereFirstName( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\Contact whereId( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\Contact whereLastName( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\Contact whereUpdatedAt( $value )
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Lineup[] $lineups
 */
class Contact extends BaseModel {
	public function usernames() {
		return $this->hasMany( Username::class );
	}

	public function posts() {
		return $this->hasMany( Post::class );
	}

	public function networks() {
		return $this->hasManyThrough( Network::class, Username::class );
	}

	public function lineups() {
		return $this->belongsToMany( Lineup::class );
	}
}
