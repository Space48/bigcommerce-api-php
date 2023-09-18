<?php

namespace Space48\Bigcommerce\Requests\ShippingMethod;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShippingZoneMethods
 *
 * Returns a list of *Shipping Methods* in a zone. Default sorting is by shipping method ID, from
 * lowest to highest.
 */
class GetShippingZoneMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones/{$this->zoneId}/methods";
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 */
	public function __construct(
		protected int $zoneId,
	) {
	}
}
