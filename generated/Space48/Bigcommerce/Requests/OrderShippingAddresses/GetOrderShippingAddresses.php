<?php

namespace Space48\Bigcommerce\Requests\OrderShippingAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderShippingAddresses
 *
 * Get all shipping addresses on an order using the `order_id`.
 *
 * Returned in the response is
 * shipping_quotes object. Please use the Get Shipping Quotes Endpoint. Using the response will return
 * a 204 for the shipping quote.
 */
class GetOrderShippingAddresses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipping_addresses";
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
