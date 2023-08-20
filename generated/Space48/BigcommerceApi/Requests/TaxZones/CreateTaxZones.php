<?php

namespace Space48\BigcommerceApi\Requests\TaxZones;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * create-tax-zones
 *
 * Create one or more tax zones.
 *
 * > #### Note
 * > You cannot create a default tax zone.
 */
class CreateTaxZones extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/tax/zones";
	}


	public function __construct()
	{
	}
}
