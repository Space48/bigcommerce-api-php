<?php

namespace Space48\Bigcommerce\Requests\TaxRates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createTaxRates
 *
 * Create one or more tax rates. Tax rates must be associated with a `tax_zone_id`.
 */
class CreateTaxRates extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/tax/rates";
	}


	public function __construct()
	{
	}
}
