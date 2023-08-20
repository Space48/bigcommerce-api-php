<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Order\OrdersByOrderIdGet;
use Space48\BigcommerceApi\Resource;

class Order extends Resource
{
	/**
	 * @param int $orderId ID of an Order.
	 */
	public function ordersByOrderIdGet(int $orderId): Response
	{
		return $this->connector->send(new OrdersByOrderIdGet($orderId));
	}
}
