<?php

namespace Social;

/**
 * Social\Username.
 *
 * @property int $id
 * @property int $contact_id
 * @property int $network_id
 * @property string $identifyer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Social\Contact $contact
 * @property-read \Social\Network $network
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Post[] $posts
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereContactId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereIdentifyer($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereNetworkId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Social\Username whereDeletedAt($value)
 */
class Username extends BaseModel
{
    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
