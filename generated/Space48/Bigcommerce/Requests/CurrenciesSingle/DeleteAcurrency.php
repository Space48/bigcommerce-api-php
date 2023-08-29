<?php

namespace Space48\Bigcommerce\Requests\CurrenciesSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteACurrency
 *
 * Deletes a *Currency*.
 *
 * If a currencyʼs `is_default` property is set to true, this currency cannot
 * be deleted.
 */
class DeleteAcurrency extends Request
{
	protected Method $method = Method::DELETE;


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
