<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutDiscounts\PostStoreHashV3CheckoutsCheckoutIdDiscounts;
use Space48\Bigcommerce\Resource;

class CheckoutDiscounts extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function postStoreHashV3checkoutsCheckoutIdDiscounts(string $checkoutId): Response
	{
		return $this->connector->send(new PostStoreHashV3CheckoutsCheckoutIdDiscounts($checkoutId));
	}
}
