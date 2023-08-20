<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutOrders\CreateAnOrder;
use Space48\BigcommerceApi\Resource;

class CheckoutOrders extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function createAnOrder(string $checkoutId): Response
	{
		return $this->connector->send(new CreateAnOrder($checkoutId));
	}
}
