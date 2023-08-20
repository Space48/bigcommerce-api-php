<?php

namespace Space48\BigcommerceApi\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get All States
 *
 * Returns a list of all states.
 */
class GetAllStates extends Request
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
		return [];
	}
}
