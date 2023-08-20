<?php

namespace Space48\BigcommerceApi\Requests\OrderConsignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-orders-orderId-consignments
 *
 * Get all consignments for an order.
 */
class GetOrdersOrderIdConsignments extends Request
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
