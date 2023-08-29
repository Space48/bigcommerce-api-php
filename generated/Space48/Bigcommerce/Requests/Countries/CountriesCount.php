<?php

namespace Space48\Bigcommerce\Requests\Countries;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * countriesCount
 *
 * Returns a count of all countries.
 */
class CountriesCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/count";
	}


	public function __construct()
	{
	}
}
