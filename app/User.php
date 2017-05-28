<?php

namespace Social;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Social\User
 *
 * @property int
 *               $id
 * @property int
 *               $client_id
 * @property string
 *               $name
 * @property string
 *               $email
 * @property string
 *               $password
 * @property string
 *               $remember_token
 * @property \Carbon\Carbon
 *               $created_at
 * @property \Carbon\Carbon
 *               $updated_at
 * @property-read \Social\Client
 *                    $client
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
 *                $notifications
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereClientId( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereCreatedAt( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereEmail( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereId( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereName( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User wherePassword( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereRememberToken( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\User whereUpdatedAt( $value )
 * @mixin \Eloquent
 */
class User extends Authenticatable {

	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
		'created_at',
		'updated_at'
	];

	public function client() {
		return $this->belongsTo( Client::class );
	}
}
