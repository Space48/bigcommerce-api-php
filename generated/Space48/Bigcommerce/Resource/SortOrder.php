<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SortOrder\Getsortorders;
use Space48\Bigcommerce\Requests\SortOrder\Updatesortorder;
use Space48\Bigcommerce\Resource;

class SortOrder extends Resource
{
	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function getsortorders(int $categoryId): Response
	{
		return $this->connector->send(new Getsortorders($categoryId, $categoryId));
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function updatesortorder(int $categoryId): Response
	{
		return $this->connector->send(new Updatesortorder($categoryId));
	}
}
