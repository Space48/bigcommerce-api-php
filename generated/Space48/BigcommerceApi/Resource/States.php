<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\States\GetAllCountryStates;
use Space48\BigcommerceApi\Requests\States\GetAllStates;
use Space48\BigcommerceApi\Requests\States\GetCountOfAllStates;
use Space48\BigcommerceApi\Requests\States\GetCountOfCountrysStates;
use Space48\BigcommerceApi\Requests\States\GetCountryState;
use Space48\BigcommerceApi\Resource;

class States extends Resource
{
	/**
	 * @param string $countryId
	 * @param string $state Name of the state/province.
	 * @param string $stateAbbreviation Abbreviation for the state/province.
	 */
	public function getAllCountryStates(string $countryId, string $state, string $stateAbbreviation): Response
	{
		return $this->connector->send(new GetAllCountryStates($countryId, $state, $stateAbbreviation));
	}


	/**
	 * @param string $countryId
	 * @param string $id
	 */
	public function getCountryState(string $countryId, string $id): Response
	{
		return $this->connector->send(new GetCountryState($countryId, $id));
	}


	public function getCountOfAllStates(): Response
	{
		return $this->connector->send(new GetCountOfAllStates());
	}


	public function getAllStates(): Response
	{
		return $this->connector->send(new GetAllStates());
	}


	/**
	 * @param string $countryId
	 */
	public function getCountOfCountrysStates(string $countryId): Response
	{
		return $this->connector->send(new GetCountOfCountrysStates($countryId));
	}
}
