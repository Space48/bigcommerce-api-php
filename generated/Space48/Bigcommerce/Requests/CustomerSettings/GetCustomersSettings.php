<?php

namespace Space48\Bigcommerce\Requests\CustomerSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomersSettings
 *
 * Returns the global-level customer settings.
 */
class GetCustomersSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/settings";
	}


	public function __construct()
	{
	}
}
