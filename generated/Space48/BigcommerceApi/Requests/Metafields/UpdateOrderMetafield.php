<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateOrderMetafield
 *
 * Updates a `Metafield` object.
 *
 * The maxiumum number of metafields allowed on each order, product,
 * category, variant, or brand is 250 per client ID.
 */
class UpdateOrderMetafield extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $orderId,
		protected int $metafieldId,
	) {
	}
}
