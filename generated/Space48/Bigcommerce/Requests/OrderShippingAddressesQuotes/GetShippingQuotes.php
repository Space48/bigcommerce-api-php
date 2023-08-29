<?php

namespace Space48\Bigcommerce\Requests\OrderShippingAddressesQuotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShippingQuotes
 *
 * Gets all shipping quotes persisted on an order.
 *
 * This is a read-only endpoint and the output can
 * vary based on the shipping quote. A shipping quote can only be generated using the storefront at
 * this time. Orders that are created in the control panel or using the API return a 204 for this
 * endpoint since a shipping quote is not generated during that process.
 */
class GetShippingQuotes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipping_addresses/{$this->shippingAddressId}/shipping_quotes";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shippingAddressId Shipping address ID.
	 */
	public function __construct(
		protected int $orderId,
		protected int $shippingAddressId,
	) {
	}
}
