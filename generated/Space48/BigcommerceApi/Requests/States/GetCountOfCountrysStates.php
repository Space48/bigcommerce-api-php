<?php

namespace Space48\BigcommerceApi\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a Count of Country’s States
 *
 * Returns a count of a country's states.
 */
class GetCountOfCountrysStates extends Request
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
