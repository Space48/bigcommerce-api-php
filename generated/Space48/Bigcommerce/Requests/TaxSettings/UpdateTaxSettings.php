<?php

namespace Space48\Bigcommerce\Requests\TaxSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateTaxSettings
 *
 * Updates global-level tax settings.
 */
class UpdateTaxSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/tax/settings";
	}


	public function __construct()
	{
	}
}
