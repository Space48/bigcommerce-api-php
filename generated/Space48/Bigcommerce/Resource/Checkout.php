<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Checkout\GetCheckout;
use Space48\Bigcommerce\Requests\Checkout\UpdateCheckout;
use Space48\Bigcommerce\Resource;

class Checkout extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $include * `cart.line_items.physical_items.options` - physical options
	 * * `cart.line_items.digital_items.options` - digital options
	 * * `consignments.available_shipping_options` - shipping options
	 * * `promotions.banners` - promotion options
	 */
	public function getCheckout(string $checkoutId, ?string $include): Response
	{
		return $this->connector->send(new GetCheckout($checkoutId, $include));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function updateCheckout(string $checkoutId): Response
	{
		return $this->connector->send(new UpdateCheckout($checkoutId));
	}
}
