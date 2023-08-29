<?php

namespace Space48\Bigcommerce\Requests\ShippingCarrier;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCarrierConnection
 *
 * Deletes a *Carrier Connection*.
 *
 * **Required Fields**
 * * carrier_id
 */
class DeleteCarrierConnection extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/shipping/carrier/connection";
	}


	public function __construct()
	{
	}
}
