<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Metafields\CreateOrderMetafield;
use Space48\Bigcommerce\Requests\Metafields\DeleteOrderMetafieldById;
use Space48\Bigcommerce\Requests\Metafields\GetOrderMetafieldByOrderIdAndMetafieldId;
use Space48\Bigcommerce\Requests\Metafields\GetOrderMetafieldsByOrderId;
use Space48\Bigcommerce\Requests\Metafields\UpdateOrderMetafield;
use Space48\Bigcommerce\Resource;

class Metafields extends Resource
{
	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's key.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 */
	public function getOrderMetafieldsByOrderId(
		int $orderId,
		string $key,
		string $namespace,
		string $direction,
	): Response
	{
		return $this->connector->send(new GetOrderMetafieldsByOrderId($orderId, $key, $namespace, $direction));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function createOrderMetafield(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderMetafield($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function getOrderMetafieldByOrderIdAndMetafieldId(int $orderId, int $metafieldId): Response
	{
		return $this->connector->send(new GetOrderMetafieldByOrderIdAndMetafieldId($orderId, $metafieldId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function updateOrderMetafield(int $orderId, int $metafieldId): Response
	{
		return $this->connector->send(new UpdateOrderMetafield($orderId, $metafieldId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function deleteOrderMetafieldById(int $orderId, int $metafieldId): Response
	{
		return $this->connector->send(new DeleteOrderMetafieldById($orderId, $metafieldId));
	}
}
