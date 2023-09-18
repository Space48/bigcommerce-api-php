<?php

namespace Space48\Bigcommerce\Requests\ShippingCarrier;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCarrierConnection
 *
 * Updates a *Carrier Connection*.
 *
 * Updating the carrier connection is done using the same information
 * as creating the connection. This endpoint can be used to update credentials.
 */
class UpdateCarrierConnection extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/shipping/carrier/connection";
	}


	public function __construct()
	{
	}
}
