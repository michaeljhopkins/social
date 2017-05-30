<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;

/**
 * Social\FederalLegislator.
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $facebook_id
 * @property string $twitter_username
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereFacebookId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereTwitterUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Social\FederalLegislator whereDeletedAt($value)
 */
class FederalLegislator extends Model
{
    protected $table = 'federal_legislators';
    protected $guarded = [];
    protected $hidden = [];
}
