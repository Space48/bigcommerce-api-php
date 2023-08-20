<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutStoreCredit\CheckoutStoreCreditAdd;
use Space48\BigcommerceApi\Requests\CheckoutStoreCredit\CheckoutsStoreCreditRemove;
use Space48\BigcommerceApi\Resource;

class CheckoutStoreCredit extends Resource
{
	/**
	 * @param string $checkoutId
	 */
	public function checkoutStoreCreditAdd(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutStoreCreditAdd($checkoutId));
	}


	/**
	 * @param string $checkoutId
	 */
	public function checkoutsStoreCreditRemove(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutsStoreCreditRemove($checkoutId));
	}
}
