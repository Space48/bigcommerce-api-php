<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderShippingAddressesQuotes\GetOrderShippingAddressShippingQuotes;
use Space48\Bigcommerce\Resource;

class OrderShippingAddressesQuotes extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 * @param int $shippingAddressId Shipping address ID.
	 */
	public function getOrderShippingAddressShippingQuotes(int $orderId, int $shippingAddressId): Response
	{
		return $this->connector->send(new GetOrderShippingAddressShippingQuotes($orderId, $shippingAddressId));
	}
}
