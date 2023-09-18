<?php

namespace Space48\Bigcommerce\Requests\TaxRates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateTaxRates
 *
 * Update one or more tax rates. Only the tax rate `id` field is required. Fields unspecified by the
 * request will retain their current state.
 */
class UpdateTaxRates extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/tax/rates";
	}


	public function __construct()
	{
	}
}
