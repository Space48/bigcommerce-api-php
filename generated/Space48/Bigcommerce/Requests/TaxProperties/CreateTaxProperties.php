<?php

namespace Space48\Bigcommerce\Requests\TaxProperties;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createTaxProperties
 *
 * Create one or more tax properties. A **code** and a **display name** must be included when creating
 * tax properties.
 */
class CreateTaxProperties extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/tax/properties";
	}


	public function __construct()
	{
	}
}
