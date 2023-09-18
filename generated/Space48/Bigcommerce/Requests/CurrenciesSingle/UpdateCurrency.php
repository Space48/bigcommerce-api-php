<?php

namespace Space48\Bigcommerce\Requests\CurrenciesSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCurrency
 *
 * Updates a *Currency*.
 *
 * **Read-Only Fields**
 *
 * * id
 * * date_created
 * * date_modified
 * *
 * currency_code
 *
 *
 * The `is_default` property can only be set to true. The value of `is_default` cannot
 * be unset, only overridden.
 */
class UpdateCurrency extends Request
{
	protected Method $method = Method::PUT;


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
