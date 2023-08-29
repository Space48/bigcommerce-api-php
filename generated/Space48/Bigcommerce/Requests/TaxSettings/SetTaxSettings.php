<?php

namespace Space48\Bigcommerce\Requests\TaxSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * set-tax-settings
 *
 * Updates global-level tax settings.
 */
class SetTaxSettings extends Request
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
