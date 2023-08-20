<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\OrderShippingAddressesQuotes\GetShippingQuotes;
use Space48\BigcommerceApi\Resource;

class OrderShippingAddressesQuotes extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 * @param int $shippingAddressId Shipping address ID.
	 */
	public function getShippingQuotes(int $orderId, int $shippingAddressId): Response
	{
		return $this->connector->send(new GetShippingQuotes($orderId, $shippingAddressId));
	}
}
