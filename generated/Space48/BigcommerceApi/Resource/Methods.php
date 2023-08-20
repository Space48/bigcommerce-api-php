<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Methods\PaymentsMethodsGet;
use Space48\BigcommerceApi\Resource;

class Methods extends Resource
{
	/**
	 * @param int $orderId Identifier for the order
	 * @param string $checkoutId Identifier for the checkout (same as the cart ID)
	 */
	public function paymentsMethodsGet(int $orderId, string $checkoutId): Response
	{
		return $this->connector->send(new PaymentsMethodsGet($orderId, $checkoutId));
	}
}
