<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutDiscounts\PostStoreHashV3CheckoutsCheckoutIdDiscounts;
use Space48\BigcommerceApi\Resource;

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
