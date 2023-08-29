<?php

namespace Space48\Bigcommerce\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * OrdersByOrderIdGet
 *
 * Returns *Order* data. This will return order data immediately after an order is placed on the
 * storefront.
 *
 * > #### Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 * > * The
 * Send a Test Request feature is not currently supported for this endpoint.
 */
class OrdersByOrderIdGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}";
	}


	/**
	 * @param int $orderId ID of an Order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
