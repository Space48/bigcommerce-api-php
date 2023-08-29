<?php

namespace Space48\Bigcommerce\Requests\PriceLists;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createPriceList
 *
 * Creates a *Price List*.
 *
 * **Required Fields**
 * * name
 */
class CreatePriceList extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/pricelists";
	}


	public function __construct()
	{
	}
}
