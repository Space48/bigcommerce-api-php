<?php

namespace Space48\Bigcommerce\Requests\ShippingMethod;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteShippingMethod
 *
 * Deletes an *Shipping Method*. Real Time Carrier Connections can also be deleted.
 */
class DeleteShippingMethod extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones/{$this->zoneId}/methods/{$this->methodId}";
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function __construct(
		protected int $zoneId,
		protected int $methodId,
	) {
	}
}
