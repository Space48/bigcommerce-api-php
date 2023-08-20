<?php

namespace Space48\BigcommerceApi\Requests\States;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get All Country's States
 *
 * Returns a list of *States* belonging to a *Country*.
 * A state or province, identifiable by an ISO
 * 3166 subdivision code.
 */
class GetAllCountryStates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/{$this->countryId}/states";
	}


	/**
	 * @param string $countryId
	 * @param string $state Name of the state/province.
	 * @param string $stateAbbreviation Abbreviation for the state/province.
	 */
	public function __construct(
		protected string $countryId,
		protected string $state,
		protected string $stateAbbreviation,
	) {
	}


	public function defaultQuery(): array
	{
		return ['state' => $this->state, 'state_abbreviation' => $this->stateAbbreviation];
	}
}
