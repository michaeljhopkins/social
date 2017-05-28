<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;

/**
 * Social\Post
 *
 * @property int $id
 * @property int $username_id
 * @property int $network_id
 * @property int $contact_id
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Social\Contact $contact
 * @property-read \Social\Network $network
 * @property-read \Social\Username $username
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereContactId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereNetworkId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Post whereUsernameId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $guarded = ['id'];

    public function network()
    {
    	return $this->belongsTo( Network::class);
    }

    public function username()
    {
    	return $this->belongsTo( Username::class);
    }

    public function contact()
    {
    	return $this->belongsTo( Contact::class);
    }
}
