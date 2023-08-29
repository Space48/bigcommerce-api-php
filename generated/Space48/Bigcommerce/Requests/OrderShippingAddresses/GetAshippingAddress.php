<?php

namespace Space48\Bigcommerce\Requests\OrderShippingAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAShippingAddress
 *
 * Gets a shipping address associated with an order.
 *
 * Returned in the response is shipping_quotes
 * object. Please use the Get Shipping Quotes Endpoint. Using the response will return a 204 for the
 * shipping quote.
 */
class GetAshippingAddress extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipping_addresses/{$this->id}";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param string $id Shipping address ID.
	 */
	public function __construct(
		protected int $orderId,
		protected string $id,
	) {
	}
}
