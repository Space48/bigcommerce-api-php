<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrder
 *
 * Gets an *Order*. To learn more about creating or updating orders, see [Orders
 * Overview](/api-docs/orders/orders-api-overview).
 */
class GetOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param null|string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
