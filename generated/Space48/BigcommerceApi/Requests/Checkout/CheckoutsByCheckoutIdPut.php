<?php

namespace Space48\BigcommerceApi\Requests\Checkout;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsByCheckoutIdPut
 *
 * Change customer message pertaining to an existing *Checkout*.
 *
 * **Limits:**
 * * 2000 characters for
 * customer message
 */
class CheckoutsByCheckoutIdPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
