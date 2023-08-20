<?php

namespace Space48\BigcommerceApi\Requests\CustomerSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomerSettingsPut
 *
 * Updates the customer settings on the global level.
 */
class CustomerSettingsPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/settings";
	}


	public function __construct()
	{
	}
}
