<?php

namespace Space48\Bigcommerce\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStatesCount
 *
 * Returns a count of all states.
 */
class GetStatesCount extends Request
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
