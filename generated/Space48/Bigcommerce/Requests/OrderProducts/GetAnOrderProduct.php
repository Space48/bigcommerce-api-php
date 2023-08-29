<?php

namespace Space48\Bigcommerce\Requests\OrderProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAnOrderProduct
 *
 * Gets a product line item associated with the order.
 */
class GetAnOrderProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/products/{$this->productId}";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $productId ID of the product.
	 */
	public function __construct(
		protected int $orderId,
		protected int $productId,
	) {
	}
}
