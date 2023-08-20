<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Countries\CountriesCount;
use Space48\BigcommerceApi\Requests\Countries\GetAllCountries;
use Space48\BigcommerceApi\Requests\Countries\GetCountry;
use Space48\BigcommerceApi\Resource;

class Countries extends Resource
{
	/**
	 * @param string $country
	 * @param string $countryIso2
	 * @param string $countryIso3
	 */
	public function getAllCountries(string $country, string $countryIso2, string $countryIso3): Response
	{
		return $this->connector->send(new GetAllCountries($country, $countryIso2, $countryIso3));
	}


	/**
	 * @param string $id
	 */
	public function getCountry(string $id): Response
	{
		return $this->connector->send(new GetCountry($id));
	}


	public function countriesCount(): Response
	{
		return $this->connector->send(new CountriesCount());
	}
}