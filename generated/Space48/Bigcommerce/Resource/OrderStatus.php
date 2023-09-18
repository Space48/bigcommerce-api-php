<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderStatus\GetOrderStatuses;
use Space48\Bigcommerce\Requests\OrderStatus\GetOrderStatusesStatus;
use Space48\Bigcommerce\Resource;

class OrderStatus extends Resource
{
	public function getOrderStatuses(): Response
	{
		return $this->connector->send(new GetOrderStatuses());
	}


	/**
	 * @param int $statusId The status ID of the order. You can get the status id from the `/orders` endpoints.
	 */
	public function getOrderStatusesStatus(int $statusId): Response
	{
		return $this->connector->send(new GetOrderStatusesStatus($statusId));
	}
}
