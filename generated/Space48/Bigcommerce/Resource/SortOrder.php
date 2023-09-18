<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SortOrder\GetCategorySortOrders;
use Space48\Bigcommerce\Requests\SortOrder\UpdateCategorySortOrders;
use Space48\Bigcommerce\Resource;

class SortOrder extends Resource
{
	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function getCategorySortOrders(int $categoryId): Response
	{
		return $this->connector->send(new GetCategorySortOrders($categoryId));
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function updateCategorySortOrders(int $categoryId): Response
	{
		return $this->connector->send(new UpdateCategorySortOrders($categoryId));
	}
}
