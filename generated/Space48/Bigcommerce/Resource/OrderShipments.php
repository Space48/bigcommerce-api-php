<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderShipments\CreateOrderShipments;
use Space48\Bigcommerce\Requests\OrderShipments\DeleteOrderShipment;
use Space48\Bigcommerce\Requests\OrderShipments\DeleteOrderShipments;
use Space48\Bigcommerce\Requests\OrderShipments\GetOrderShipment;
use Space48\Bigcommerce\Requests\OrderShipments\GetOrderShipments;
use Space48\Bigcommerce\Requests\OrderShipments\GetOrderShipmentsCount;
use Space48\Bigcommerce\Requests\OrderShipments\UpdateOrderShipment;
use Space48\Bigcommerce\Resource;

class OrderShipments extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getOrderShipments(int $orderId): Response
	{
		return $this->connector->send(new GetOrderShipments($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function createOrderShipments(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderShipments($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function deleteOrderShipments(int $orderId): Response
	{
		return $this->connector->send(new DeleteOrderShipments($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function getOrderShipmentsCount(int $orderId): Response
	{
		return $this->connector->send(new GetOrderShipmentsCount($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shipmentId Shipment ID.
	 */
	public function getOrderShipment(int $orderId, int $shipmentId): Response
	{
		return $this->connector->send(new GetOrderShipment($orderId, $shipmentId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shipmentId Shipment ID.
	 */
	public function updateOrderShipment(int $orderId, int $shipmentId): Response
	{
		return $this->connector->send(new UpdateOrderShipment($orderId, $shipmentId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shipmentId Shipment ID.
	 */
	public function deleteOrderShipment(int $orderId, int $shipmentId): Response
	{
		return $this->connector->send(new DeleteOrderShipment($orderId, $shipmentId));
	}
}
