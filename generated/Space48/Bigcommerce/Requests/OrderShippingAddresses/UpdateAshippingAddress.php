<?php

namespace Space48\Bigcommerce\Requests\OrderShippingAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAShippingAddress
 *
 * Update a shipping address associated with an order.
 *
 * **Note**: Updating a shipping address will NOT
 * trigger the recalculation of shipping cost and tax
 */
class UpdateAshippingAddress extends Request
{
	protected Method $method = Method::PUT;


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
