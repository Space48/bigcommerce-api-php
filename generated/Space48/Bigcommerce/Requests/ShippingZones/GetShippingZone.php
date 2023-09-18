<?php

namespace Space48\Bigcommerce\Requests\ShippingZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShippingZone
 *
 * Returns a single *Shipping Zone*.
 */
class GetShippingZone extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones/{$this->id}";
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
