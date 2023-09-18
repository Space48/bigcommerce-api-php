<?php

namespace Space48\Bigcommerce\Requests\CustomerSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCustomersSettings
 *
 * Updates the customer settings on the global level.
 */
class UpdateCustomersSettings extends Request
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
