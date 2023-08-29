<?php

namespace Space48\Bigcommerce\Requests\StoreLocale;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update Locale Settings
 *
 * Updates global locale settings.
 */
class UpdateLocaleSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/store/locale";
	}


	public function __construct()
	{
	}
}
