<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteOrder
 *
 * Archives an order. To remove a single product from an order, see `PUT /orders/{order_id}`.
 */
class DeleteOrder extends Request
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
