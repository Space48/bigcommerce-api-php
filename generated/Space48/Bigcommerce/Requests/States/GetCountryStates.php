<?php

namespace Space48\Bigcommerce\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCountryStates
 *
 * Returns a list of *States* belonging to a *Country*.
 * A state or province, identifiable by an ISO
 * 3166 subdivision code.
 */
class GetCountryStates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/{$this->countryId}/states";
	}


	/**
	 * @param string $countryId
	 * @param null|string $state Name of the state/province.
	 * @param null|string $stateAbbreviation Abbreviation for the state/province.
	 */
	public function __construct(
		protected string $countryId,
		protected ?string $state = null,
		protected ?string $stateAbbreviation = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['state' => $this->state, 'state_abbreviation' => $this->stateAbbreviation]);
	}
}
