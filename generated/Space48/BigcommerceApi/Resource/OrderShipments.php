<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\OrderShipments\CreateOrderShipments;
use Space48\BigcommerceApi\Requests\OrderShipments\DeleteAllOrderShipments;
use Space48\BigcommerceApi\Requests\OrderShipments\DeleteOrderShipment;
use Space48\BigcommerceApi\Requests\OrderShipments\GetAllOrderShipments;
use Space48\BigcommerceApi\Requests\OrderShipments\GetCountShipments;
use Space48\BigcommerceApi\Requests\OrderShipments\GetOrderShipment;
use Space48\BigcommerceApi\Requests\OrderShipments\UpdateOrderShipment;
use Space48\BigcommerceApi\Resource;

class OrderShipments extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getAllOrderShipments(int $orderId): Response
	{
		return $this->connector->send(new GetAllOrderShipments($orderId));
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
	public function deleteAllOrderShipments(int $orderId): Response
	{
		return $this->connector->send(new DeleteAllOrderShipments($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function getCountShipments(int $orderId): Response
	{
		return $this->connector->send(new GetCountShipments($orderId));
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
