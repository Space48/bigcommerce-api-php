<?php

namespace Space48\Bigcommerce\Requests\ShippingZones;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createShippingZones
 *
 * Creates a *Shipping Zone*.
 */
class CreateShippingZones extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones";
	}


	public function __construct()
	{
	}
}
