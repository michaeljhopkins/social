<?php

namespace Social;

/**
 * Social\Post.
 *
 * @property int $id
 * @property int $username_id
 * @property int $network_id
 * @property int $contact_id
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Social\Contact $contact
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Lineup[] $lineups
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
 * @property string $permalink
 * @method static \Illuminate\Database\Query\Builder|\Social\Post wherePermalink( $value )
 */
class Post extends BaseModel
{
    protected $hidden = ['created_at', 'updated_at', 'contact_id', 'username_id', 'network_id'];

    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function username()
    {
        return $this->belongsTo(Username::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
