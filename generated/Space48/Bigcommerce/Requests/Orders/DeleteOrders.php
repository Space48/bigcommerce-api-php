<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteOrders
 *
 * Archives all orders.
 */
class DeleteOrders extends Request
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
		return array_filter([]);
	}
}
