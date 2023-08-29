<?php

namespace Space48\Bigcommerce\Requests\OrderSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateGlobalOrderSettings
 *
 * Updates global order settings.
 */
class UpdateGlobalOrderSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/orders/settings";
	}


	public function __construct()
	{
	}
}
