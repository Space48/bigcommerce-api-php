<?php

namespace Space48\Bigcommerce\Requests\OrderSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetGlobalOrderSettings
 *
 * Returns global order settings.
 */
class GetGlobalOrderSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/settings";
	}


	public function __construct()
	{
	}
}
