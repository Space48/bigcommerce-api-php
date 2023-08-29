<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAnOrder
 *
 * Updates an *Order*.
 *
 * To add a product to an existing order, don't include `id` in the body. Include
 * `product_options` if adding a product with variants.
 *
 * To update a product in an order, include `id`
 * in the body. The body should only contain the fields that need to be updated. Those fields that are
 * omitted will not be changed.
 *
 * To remove a product from an order, set that product’s `quantity` to
 * `0`.
 *
 * To learn more about creating or updating orders, see [Orders
 * Overview](/api-docs/orders/orders-api-overview).
 */
class UpdateAnOrder extends Request
{
	protected Method $method = Method::PUT;


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
