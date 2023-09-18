<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderConsignments\GetOrderConsignmentShippingQuotes;
use Space48\Bigcommerce\Requests\OrderConsignments\GetOrderConsignments;
use Space48\Bigcommerce\Resource;

class OrderConsignments extends Resource
{
	/**
	 * @param string $orderId
	 */
	public function getOrderConsignments(string $orderId): Response
	{
		return $this->connector->send(new GetOrderConsignments($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shippingConsignmentId Shipping consignment ID.
	 */
	public function getOrderConsignmentShippingQuotes(int $orderId, int $shippingConsignmentId): Response
	{
		return $this->connector->send(new GetOrderConsignmentShippingQuotes($orderId, $shippingConsignmentId));
	}
}
