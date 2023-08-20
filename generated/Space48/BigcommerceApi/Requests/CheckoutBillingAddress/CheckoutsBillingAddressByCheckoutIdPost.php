<?php

namespace Space48\BigcommerceApi\Requests\CheckoutBillingAddress;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CheckoutsBillingAddressByCheckoutIdPost
 *
 * Adds a billing address to an existing checkout.
 *
 * **Required Fields**
 * * email
 * * country_code
 */
class CheckoutsBillingAddressByCheckoutIdPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/billing-address";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
