<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\States\GetCountryState;
use Space48\Bigcommerce\Requests\States\GetCountryStates;
use Space48\Bigcommerce\Requests\States\GetCountryStatesCount;
use Space48\Bigcommerce\Requests\States\GetStates;
use Space48\Bigcommerce\Requests\States\GetStatesCount;
use Space48\Bigcommerce\Resource;

class States extends Resource
{
	/**
	 * @param string $countryId
	 * @param string $state Name of the state/province.
	 * @param string $stateAbbreviation Abbreviation for the state/province.
	 */
	public function getCountryStates(string $countryId, ?string $state, ?string $stateAbbreviation): Response
	{
		return $this->connector->send(new GetCountryStates($countryId, $state, $stateAbbreviation));
	}


	/**
	 * @param string $countryId
	 * @param string $id
	 */
	public function getCountryState(string $countryId, string $id): Response
	{
		return $this->connector->send(new GetCountryState($countryId, $id));
	}


	public function getStatesCount(): Response
	{
		return $this->connector->send(new GetStatesCount());
	}


	public function getStates(): Response
	{
		return $this->connector->send(new GetStates());
	}


	/**
	 * @param string $countryId
	 */
	public function getCountryStatesCount(string $countryId): Response
	{
		return $this->connector->send(new GetCountryStatesCount($countryId));
	}
}
