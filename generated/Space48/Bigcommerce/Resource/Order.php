<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Order\OrdersByOrderIdGet;
use Space48\Bigcommerce\Resource;

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
