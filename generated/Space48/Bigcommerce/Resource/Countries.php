<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Countries\GetCountries;
use Space48\Bigcommerce\Requests\Countries\GetCountriesCount;
use Space48\Bigcommerce\Requests\Countries\GetCountry;
use Space48\Bigcommerce\Resource;

class Countries extends Resource
{
	/**
	 * @param string $country
	 * @param string $countryIso2
	 * @param string $countryIso3
	 */
	public function getCountries(?string $country, ?string $countryIso2, ?string $countryIso3): Response
	{
		return $this->connector->send(new GetCountries($country, $countryIso2, $countryIso3));
	}


	/**
	 * @param string $id
	 */
	public function getCountry(string $id): Response
	{
		return $this->connector->send(new GetCountry($id));
	}


	public function getCountriesCount(): Response
	{
		return $this->connector->send(new GetCountriesCount());
	}
}
