<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutDiscounts\AddCheckoutDiscount;
use Space48\Bigcommerce\Resource;

class CheckoutDiscounts extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function addCheckoutDiscount(string $checkoutId): Response
	{
		return $this->connector->send(new AddCheckoutDiscount($checkoutId));
	}
}
