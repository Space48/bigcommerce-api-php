<?php

namespace Space48\Bigcommerce\Requests\ShippingZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllShippingZones
 *
 * Returns a list of all *Shipping Zones*.
 */
class GetAllShippingZones extends Request
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
