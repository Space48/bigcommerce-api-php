<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderCoupons\GetAllOrderCoupons;
use Space48\Bigcommerce\Resource;

class OrderCoupons extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getAllOrderCoupons(int $orderId): Response
	{
		return $this->connector->send(new GetAllOrderCoupons($orderId));
	}
}
