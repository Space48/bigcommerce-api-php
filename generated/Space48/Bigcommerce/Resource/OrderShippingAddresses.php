<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderShippingAddresses\GetAllShippingAddresses;
use Space48\Bigcommerce\Requests\OrderShippingAddresses\GetAshippingAddress;
use Space48\Bigcommerce\Requests\OrderShippingAddresses\UpdateAshippingAddress;
use Space48\Bigcommerce\Resource;

class OrderShippingAddresses extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getAllShippingAddresses(int $orderId): Response
	{
		return $this->connector->send(new GetAllShippingAddresses($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param string $id Shipping address ID.
	 */
	public function getAshippingAddress(int $orderId, string $id): Response
	{
		return $this->connector->send(new GetAshippingAddress($orderId, $id));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param string $id Shipping address ID.
	 */
	public function updateAshippingAddress(int $orderId, string $id): Response
	{
		return $this->connector->send(new UpdateAshippingAddress($orderId, $id));
	}
}