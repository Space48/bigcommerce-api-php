<?php

namespace Space48\Bigcommerce\Requests\ShippingZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShippingZones
 *
 * Returns a list of all *Shipping Zones*.
 */
class GetShippingZones extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones";
	}


	public function __construct()
	{
	}
}
