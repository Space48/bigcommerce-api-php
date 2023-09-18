<?php

namespace Space48\Bigcommerce\Requests\CurrenciesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCurrencies
 *
 * Returns a list of all store *Currency*.
 */
class GetCurrencies extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/currencies";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
