<?php

namespace Space48\Bigcommerce\Requests\OrderProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderProducts
 *
 * Lists 50 order products on an order using `order_id`. By default, items sort from lowest to highest
 * according to a newly created ID, separate from the `order_id` and the `product_id`.
 */
class GetOrderProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/products";
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
