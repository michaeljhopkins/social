<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;

/**
 * Social\Search
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Client[] $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Contact[] $contacts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Post[] $posts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Username[] $usernames
 * @method static \Illuminate\Database\Query\Builder|\Social\Search whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Search whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Search whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Search whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Search extends Model
{
	protected $guarded = ['id'];

	public function clients()
	{
		return $this->belongsToMany( Client::class);
	}

	public function contacts()
	{
		return $this->belongsToMany( Contact::class);
	}

	public function usernames()
	{
		return $this->hasManyThrough( Username::class, Contact::class);
	}

	public function posts()
	{
		return $this->hasManyThrough( Post::class, Contact::class);
	}
}
