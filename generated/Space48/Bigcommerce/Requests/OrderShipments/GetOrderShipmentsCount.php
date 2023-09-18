<?php

namespace Space48\Bigcommerce\Requests\OrderShipments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderShipmentsCount
 *
 * Gets a count of the number of shipments that have been made for a single order.
 */
class GetOrderShipmentsCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipments/count";
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
