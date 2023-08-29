<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createAnOrder
 *
 * Creates an *Order*. To learn more about creating or updating orders, see [Orders
 * Overview](/api-docs/orders/orders-api-overview).
 *
 * Create an order with an existing catalog product
 * or a custom product.
 *
 * **Required Fields**
 *
 * * `products` or `consignments`
 * * `billing_address`
 *
 * When
 * you create an order, the `consignment(s)` array allows you to create pickup consignments.
 * - An order
 * can have either a pickup or a shipping fulfillment method, but not both.
 * - An order can have only
 * one pickup consignment.
 *
 * Choose from one of the following:
 * 1. Create order with a shipping
 * fulfillment method using `shipping_addresses` and `products`, i.e. legacy mode
 * 2. Create order with
 * a pickup fulfillment method using `consignments`, i.e. Consignment mode
 *
 * You can fulfill an order
 * with shipping or pickup, but not both.
 *
 * This means that if the `consignments` array is present in
 * the request, then _none_ of the following may be present and vice-versa:
 * - `shipping_addresses`
 * -
 * `products`
 */
class CreateAnOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders";
	}


	/**
	 * @param string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function __construct(
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
