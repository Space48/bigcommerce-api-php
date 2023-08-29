<?php

namespace Space48\Bigcommerce\Requests\CheckoutBillingAddress;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsBillingAddressByCheckoutIdAndAddressIdPut
 *
 * Updates an existing billing address on a checkout.
 */
class CheckoutsBillingAddressByCheckoutIdAndAddressIdPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/billing-address/{$this->addressId}";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param int $addressId
	 */
	public function __construct(
		protected string $checkoutId,
		protected int $addressId,
	) {
	}
}
