<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutToken\CheckoutToken as CheckoutTokenRequest;
use Space48\BigcommerceApi\Resource;

class CheckoutToken extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function checkoutToken(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutTokenRequest($checkoutId));
	}
}
