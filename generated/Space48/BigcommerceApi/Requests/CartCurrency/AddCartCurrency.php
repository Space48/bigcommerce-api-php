<?php

namespace Space48\BigcommerceApi\Requests\CartCurrency;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addCartCurrency
 *
 * Update currency of the *Cart*.
 * Promotions and gift certificates that don't apply to the new
 * currency will be removed from your cart.
 * You cannot update the cart currency if the draft order cart
 * or the cart contains a manual discount.
 *
 * > #### Note
 * > * Substitute your storefront domain for
 * `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported for this
 * endpoint.
 */
class AddCartCurrency extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/currency";
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 */
	public function __construct(
		protected string $cartId,
	) {
	}
}
