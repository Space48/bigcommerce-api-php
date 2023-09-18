<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderShippingAddresses\GetOrderShippingAddress;
use Space48\Bigcommerce\Requests\OrderShippingAddresses\GetOrderShippingAddresses;
use Space48\Bigcommerce\Requests\OrderShippingAddresses\UpdateOrderShippingAddress;
use Space48\Bigcommerce\Resource;

class OrderShippingAddresses extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getOrderShippingAddresses(int $orderId): Response
	{
		return $this->connector->send(new GetOrderShippingAddresses($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param string $id Shipping address ID.
	 */
	public function getOrderShippingAddress(int $orderId, string $id): Response
	{
		return $this->connector->send(new GetOrderShippingAddress($orderId, $id));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param string $id Shipping address ID.
	 */
	public function updateOrderShippingAddress(int $orderId, string $id): Response
	{
		return $this->connector->send(new UpdateOrderShippingAddress($orderId, $id));
	}
}
