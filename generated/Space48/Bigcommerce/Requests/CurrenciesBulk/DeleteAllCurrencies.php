<?php

namespace Space48\Bigcommerce\Requests\CurrenciesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllCurrencies
 *
 * Deletes all non-default store currencies.
 */
class DeleteAllCurrencies extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/currencies";
	}


	public function __construct()
	{
	}
}
