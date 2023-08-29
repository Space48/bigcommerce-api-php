<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutStoreCredit\CheckoutStoreCreditAdd;
use Space48\Bigcommerce\Requests\CheckoutStoreCredit\CheckoutsStoreCreditRemove;
use Space48\Bigcommerce\Resource;

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
