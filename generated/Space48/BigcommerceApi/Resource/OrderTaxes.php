<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\OrderTaxes\GetOrderTaxes;
use Space48\BigcommerceApi\Resource;

class OrderTaxes extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 * @param string $details To return detailed tax information, pass in the details query.
	 */
	public function getOrderTaxes(int $orderId, string $details): Response
	{
		return $this->connector->send(new GetOrderTaxes($orderId, $details));
	}
}
