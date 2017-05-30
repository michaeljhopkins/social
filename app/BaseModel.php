<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Social\BaseModel.
 *
 * @mixin \Eloquent
 */
class BaseModel extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $hidden = [];
}
