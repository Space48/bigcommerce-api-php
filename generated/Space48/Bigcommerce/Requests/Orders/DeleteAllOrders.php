<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllOrders
 *
 * Archives all orders.
 */
class DeleteAllOrders extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/orders";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
