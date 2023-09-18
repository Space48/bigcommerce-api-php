<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderCoupons\GetOrderCoupons;
use Space48\Bigcommerce\Resource;

class OrderCoupons extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getOrderCoupons(int $orderId): Response
	{
		return $this->connector->send(new GetOrderCoupons($orderId));
	}
}
