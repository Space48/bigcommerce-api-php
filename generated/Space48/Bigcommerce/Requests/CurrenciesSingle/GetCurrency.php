<?php

namespace Space48\Bigcommerce\Requests\CurrenciesSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCurrency
 *
 * Returns a single *Currency*.
 */
class GetCurrency extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/currencies/{$this->id}";
	}


	/**
	 * @param string $id Currency ID
	 */
	public function __construct(
		protected string $id,
	) {
	}
}
