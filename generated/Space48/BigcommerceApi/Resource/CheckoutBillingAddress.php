<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutBillingAddress\CheckoutsBillingAddressByCheckoutIdAndAddressIdPut;
use Space48\BigcommerceApi\Requests\CheckoutBillingAddress\CheckoutsBillingAddressByCheckoutIdPost;
use Space48\BigcommerceApi\Resource;

class CheckoutBillingAddress extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function checkoutsBillingAddressByCheckoutIdPost(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutsBillingAddressByCheckoutIdPost($checkoutId));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param int $addressId
	 */
	public function checkoutsBillingAddressByCheckoutIdAndAddressIdPut(string $checkoutId, int $addressId): Response
	{
		return $this->connector->send(new CheckoutsBillingAddressByCheckoutIdAndAddressIdPut($checkoutId, $addressId));
	}
}
