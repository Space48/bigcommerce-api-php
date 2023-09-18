<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutBillingAddress\AddCheckoutBillingAddress;
use Space48\Bigcommerce\Requests\CheckoutBillingAddress\UpdateCheckoutBillingAddress;
use Space48\Bigcommerce\Resource;

class CheckoutBillingAddress extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function addCheckoutBillingAddress(string $checkoutId): Response
	{
		return $this->connector->send(new AddCheckoutBillingAddress($checkoutId));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param int $addressId
	 */
	public function updateCheckoutBillingAddress(string $checkoutId, int $addressId): Response
	{
		return $this->connector->send(new UpdateCheckoutBillingAddress($checkoutId, $addressId));
	}
}
