<?php

namespace Space48\BigcommerceApi\Requests\CurrenciesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCurrencies
 *
 * Returns a list of all store *Currency*.
 */
class GetAllCurrencies extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/currencies";
	}


	public function __construct()
	{
	}
}
