<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;

/**
 * Social\TempFed.
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $facebook_id
 * @property string $twitter_username
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereFacebookId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereTwitterUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\TempFed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TempFed extends Model
{
    protected $guarded = [];
    protected $hidden = [];
}
