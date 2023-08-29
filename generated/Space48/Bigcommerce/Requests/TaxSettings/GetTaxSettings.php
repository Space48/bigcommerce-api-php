<?php

namespace Space48\Bigcommerce\Requests\TaxSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-tax-settings
 *
 * Retrieves global-level tax settings.
 */
class GetTaxSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax/settings";
	}


	public function __construct()
	{
	}
}
