<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrdersCount
 *
 * Gets an array of orders in the store organized by order status.
 */
class GetOrdersCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/count";
	}


	public function __construct()
	{
	}
}
