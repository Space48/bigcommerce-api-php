<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderConsignments\GetOrdersOrderIdConsignments;
use Space48\Bigcommerce\Requests\OrderConsignments\GetOrdersOrderIdConsignmentsShippingShippingIdShippingQuotes;
use Space48\Bigcommerce\Resource;

class OrderConsignments extends Resource
{
	/**
	 * @param string $orderId
	 */
	public function getOrdersOrderIdConsignments(string $orderId): Response
	{
		return $this->connector->send(new GetOrdersOrderIdConsignments($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shippingConsignmentId Shipping consignment ID.
	 */
	public function getOrdersOrderIdConsignmentsShippingShippingIdShippingQuotes(
		int $orderId,
		int $shippingConsignmentId,
	): Response
	{
		return $this->connector->send(new GetOrdersOrderIdConsignmentsShippingShippingIdShippingQuotes($orderId, $shippingConsignmentId));
	}
}
