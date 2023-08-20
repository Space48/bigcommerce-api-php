<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteOrderMetafieldById
 *
 * Deletes a `Metafield`.
 */
class DeleteOrderMetafieldById extends Request
{
	protected Method $method = Method::DELETE;


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
