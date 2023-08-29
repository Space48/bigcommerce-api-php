<?php

namespace Space48\Bigcommerce\Requests\TaxProperties;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * update-tax-properties
 *
 * Update one or more tax properties. Only fields specified will be adjusted.
 */
class UpdateTaxProperties extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/tax/properties";
	}


	public function __construct()
	{
	}
}
