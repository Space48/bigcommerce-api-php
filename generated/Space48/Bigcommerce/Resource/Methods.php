<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Methods\GetPaymentMethods;
use Space48\Bigcommerce\Resource;

class Methods extends Resource
{
	/**
	 * @param int $orderId Identifier for the order
	 * @param string $checkoutId Identifier for the checkout (same as the cart ID)
	 */
	public function getPaymentMethods(?int $orderId, ?string $checkoutId): Response
	{
		return $this->connector->send(new GetPaymentMethods($orderId, $checkoutId));
	}
}
