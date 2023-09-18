<?php

namespace Space48\Bigcommerce\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStates
 *
 * Returns a list of all states.
 */
class GetStates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/states";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
