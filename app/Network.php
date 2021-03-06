<?php

namespace Social;

/**
 * Social\Network.
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Contact[] $contacts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Post[]     $posts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Social\Username[] $usernames
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string                                                           $icon
 * @property string                                                           $url
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereIcon( $value )
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereUrl( $value )
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Social\Network whereDeletedAt($value)
 */
class Network extends BaseModel
{
    public function usernames()
    {
        return $this->hasMany(Username::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
