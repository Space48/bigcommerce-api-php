<?php

namespace Space48\Bigcommerce\Requests\OrderConsignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderConsignments
 *
 * Get all consignments for an order.
 */
class GetOrderConsignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/consignments";
	}


	/**
	 * @param string $orderId
	 */
	public function __construct(
		protected string $orderId,
	) {
	}
}
