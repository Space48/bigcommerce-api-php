<?php

namespace Space48\Bigcommerce\Requests\OrderShipments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteOrderShipment
 *
 * Deletes a shipment associated with an order.
 */
class DeleteOrderShipment extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipments/{$this->shipmentId}";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $shipmentId Shipment ID.
	 */
	public function __construct(
		protected int $orderId,
		protected int $shipmentId,
	) {
	}
}
