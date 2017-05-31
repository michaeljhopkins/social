<?php
/**
 * Created by PhpStorm.
 * User: michaelhopkins
 * Date: 5/29/17
 * Time: 7:16 AM.
 */
namespace Social\Filters;


class PostFilters extends Filters
{
	protected $filters = ['network', 'from'];

	/**
	 * Filters the query by the given username.
	 *
	 * @param $network_id
	 * @return mixed
	 * @internal param $username
	 *
	 */
	public function network($network_id)
	{
		return $this->builder->where('network_id', $network_id);
	}

	public function from($from)
	{
		return $this->builder->whereBetween( 'created_at',[request('from'), request('to')]);
	}
}
