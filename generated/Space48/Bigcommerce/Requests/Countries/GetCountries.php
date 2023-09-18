<?php

namespace Space48\Bigcommerce\Requests\Countries;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCountries
 *
 * Get a list of all countries available. A country or territory, identifiable by an ISO 3166 country
 * code.
 */
class GetCountries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries";
	}


	/**
	 * @param null|string $country
	 * @param null|string $countryIso2
	 * @param null|string $countryIso3
	 */
	public function __construct(
		protected ?string $country = null,
		protected ?string $countryIso2 = null,
		protected ?string $countryIso3 = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['country' => $this->country, 'country_iso2' => $this->countryIso2, 'country_iso3' => $this->countryIso3]);
	}
}
