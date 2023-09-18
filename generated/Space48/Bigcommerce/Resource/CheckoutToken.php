<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutToken\CreateCheckoutToken;
use Space48\Bigcommerce\Resource;

class CheckoutToken extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function createCheckoutToken(string $checkoutId): Response
	{
		return $this->connector->send(new CreateCheckoutToken($checkoutId));
	}
}
