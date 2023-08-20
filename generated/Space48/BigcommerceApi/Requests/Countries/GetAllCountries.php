<?php

namespace Space48\BigcommerceApi\Requests\Countries;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get All Countries
 *
 * Get a list of all countries available. A country or territory, identifiable by an ISO 3166 country
 * code.
 */
class GetAllCountries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries";
	}


	/**
	 * @param string $country
	 * @param string $countryIso2
	 * @param string $countryIso3
	 */
	public function __construct(
		protected string $country,
		protected string $countryIso2,
		protected string $countryIso3,
	) {
	}


	public function defaultQuery(): array
	{
		return ['country' => $this->country, 'country_iso2' => $this->countryIso2, 'country_iso3' => $this->countryIso3];
	}
}
