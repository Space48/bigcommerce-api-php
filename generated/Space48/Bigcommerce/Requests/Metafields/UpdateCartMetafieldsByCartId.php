<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateCartMetafieldsByCartId
 *
 * Update a `Metafield`, by `cart_id`.
 */
class UpdateCartMetafieldsByCartId extends Request
{
	protected Method $method = Method::PUT;


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
