<?php

namespace Space48\Bigcommerce\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCountryState
 *
 * Returns a *State*.
 * A state or province, identifiable by an ISO 3166 subdivision code.
 */
class GetCountryState extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/{$this->countryId}/states/{$this->id}";
	}


	/**
	 * @param string $countryId
	 * @param string $id
	 */
	public function __construct(
		protected string $countryId,
		protected string $id,
	) {
	}
}
