<?php

namespace Space48\Bigcommerce\Requests\Cart;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteACart
 *
 * Deletes a *Cart*. Once a *Cart* has been deleted it can not be recovered.
 *
 *
 * > #### Note
 * > *
 * Substitute your storefront domain for `yourstore.example.com`.
 * > * The Send a Test Request feature
 * is not currently supported for this endpoint.
 */
class DeleteAcart extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}";
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 */
	public function __construct(
		protected string $cartId,
	) {
	}
}
