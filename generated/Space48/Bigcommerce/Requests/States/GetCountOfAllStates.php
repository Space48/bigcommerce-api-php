<?php

namespace Space48\Bigcommerce\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a Count of All States
 *
 * Returns a count of all states.
 */
class GetCountOfAllStates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/states/count";
	}


	public function __construct()
	{
	}
}
