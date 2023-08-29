<?php

namespace Space48\Bigcommerce\Requests\StoreLocale;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Locale Settings
 *
 * Returns global locale settings.
 */
class GetLocaleSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/store/locale";
	}


	public function __construct()
	{
	}
}
