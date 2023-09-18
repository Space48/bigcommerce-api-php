<?php

namespace Space48\Bigcommerce\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCountryStatesCount
 *
 * Returns a count of a country's states.
 */
class GetCountryStatesCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/{$this->countryId}/states/count";
	}


	/**
	 * @param string $countryId
	 */
	public function __construct(
		protected string $countryId,
	) {
	}
}
