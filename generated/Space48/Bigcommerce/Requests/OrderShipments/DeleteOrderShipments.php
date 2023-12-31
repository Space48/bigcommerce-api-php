<?php

namespace Space48\Bigcommerce\Requests\OrderShipments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteOrderShipments
 *
 * Deletes all shipments associated with an order.
 */
class DeleteOrderShipments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipments";
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
