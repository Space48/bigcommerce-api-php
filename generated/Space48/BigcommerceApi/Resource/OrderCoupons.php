<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\OrderCoupons\GetAllOrderCoupons;
use Space48\BigcommerceApi\Resource;

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
