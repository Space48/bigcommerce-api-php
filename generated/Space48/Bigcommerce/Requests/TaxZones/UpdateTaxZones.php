<?php

namespace Space48\Bigcommerce\Requests\TaxZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateTaxZones
 *
 * Update one or more tax zones. Only the tax zone `id` field is required. Fields unspecified by the
 * request will retain their current state.
 */
class UpdateTaxZones extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/tax/zones";
	}


	public function __construct()
	{
	}
}
