<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TaxProperties\CreateTaxProperties;
use Space48\Bigcommerce\Requests\TaxProperties\DeleteTaxProperties;
use Space48\Bigcommerce\Requests\TaxProperties\GetTaxProperties;
use Space48\Bigcommerce\Requests\TaxProperties\UpdateTaxProperties;
use Space48\Bigcommerce\Resource;

class TaxProperties extends Resource
{
	/**
	 * @param string $idIn ID of tax property. To target multiple tax properties, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function getTaxProperties(?string $idIn): Response
	{
		return $this->connector->send(new GetTaxProperties($idIn));
	}


	public function updateTaxProperties(): Response
	{
		return $this->connector->send(new UpdateTaxProperties());
	}


	public function createTaxProperties(): Response
	{
		return $this->connector->send(new CreateTaxProperties());
	}


	/**
	 * @param string $idIn ID of tax property. To target multiple tax properties, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function deleteTaxProperties(string $idIn): Response
	{
		return $this->connector->send(new DeleteTaxProperties($idIn));
	}
}
