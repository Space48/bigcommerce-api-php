<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCartMetafieldById
 *
 * Deletes a `Metafield`.
 */
class DeleteCartMetafieldById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param int $metafieldId The unique ID of the subject `Metafield`.
	 */
	public function __construct(
		protected string $cartId,
		protected int $metafieldId,
	) {
	}
}
