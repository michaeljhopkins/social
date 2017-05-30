<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;

/**
 * Social\BaseModel
 *
 * @mixin \Eloquent
 */
class BaseModel extends Model {

	protected $guarded = [];
	protected $hidden = [];
}
