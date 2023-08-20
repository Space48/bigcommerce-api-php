<?php

namespace Space48\BigcommerceApi\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAnOrder
 *
 * Archives an order. To remove a single product from an order, see `PUT /orders/{order_id}`.
 */
class DeleteAnOrder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}";
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
