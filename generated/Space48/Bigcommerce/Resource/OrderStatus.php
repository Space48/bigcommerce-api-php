<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderStatus\GetAorderStatus;
use Space48\Bigcommerce\Requests\OrderStatus\GetOrderStatus;
use Space48\Bigcommerce\Resource;

class OrderStatus extends Resource
{
	public function getOrderStatus(): Response
	{
		return $this->connector->send(new GetOrderStatus());
	}


	/**
	 * @param int $statusId The status ID of the order. You can get the status id from the `/orders` endpoints.
	 */
	public function getAorderStatus(int $statusId): Response
	{
		return $this->connector->send(new GetAorderStatus($statusId));
	}
}
