<?php

namespace Space48\Bigcommerce\Requests\OrderShipments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderShipments
 *
 * Gets a list of all shipments on an order.
 */
class GetOrderShipments extends Request
{
	protected Method $method = Method::GET;


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


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
