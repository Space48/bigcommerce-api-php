<?php

namespace Space48\BigcommerceApi\Requests\CartsSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteACart
 *
 * Deletes a *Cart*. Once a *Cart* has been deleted it can’t be recovered.
 */
class DeleteAcart extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}";
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 */
	public function __construct(
		protected string $cartId,
	) {
	}
}
