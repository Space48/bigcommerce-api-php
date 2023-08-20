<?php

namespace Space48\BigcommerceApi\Requests\OrderConsignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-orders-orderId-consignments-shipping-shippingId-shippingQuotes
 *
 * Get all shipping quotes persisted on an order for a shipping consignment.
 * This is a read-only
 * endpoint whose response depends on the shipping quote. You can only generate a shipping quote using
 * the storefront at this time. Orders that are created in the control panel, or using the API, return
 * a 204 status response since you can't generate a shipping quote during that process.
 */
class GetOrdersOrderIdConsignmentsShippingShippingIdShippingQuotes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/consignments/shipping/{$this->shippingConsignmentId}/shipping_quotes";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shippingConsignmentId Shipping consignment ID.
	 */
	public function __construct(
		protected int $orderId,
		protected int $shippingConsignmentId,
	) {
	}
}
