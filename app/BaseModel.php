<?php

namespace Social;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {

	protected $guarded = [ 'id' ];
	protected $hidden = [ 'created_at', 'updated_at' ];
}
