<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\TaxRates\CreateTaxRates;
use Space48\BigcommerceApi\Requests\TaxRates\DeleteTaxRates;
use Space48\BigcommerceApi\Requests\TaxRates\GetTaxRates;
use Space48\BigcommerceApi\Requests\TaxRates\UpdateTaxRates;
use Space48\BigcommerceApi\Resource;

class TaxRates extends Resource
{
	/**
	 * @param array $idIn Filter by tax rate `id`. Use a comma-separated CSV string of IDs for multiple tax rates. For example, `5` or `12,34,56`.
	 * @param array $taxZoneIdIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
	 */
	public function getTaxRates(array $idIn, array $taxZoneIdIn): Response
	{
		return $this->connector->send(new GetTaxRates($idIn, $taxZoneIdIn));
	}


	public function updateTaxRates(): Response
	{
		return $this->connector->send(new UpdateTaxRates());
	}


	public function createTaxRates(): Response
	{
		return $this->connector->send(new CreateTaxRates());
	}


	/**
	 * @param array $idIn Filter by tax rate `id`. Use a comma-separated CSV string of IDs for multiple tax rates. For example, `5` or `12,34,56`.
	 */
	public function deleteTaxRates(array $idIn): Response
	{
		return $this->connector->send(new DeleteTaxRates($idIn));
	}
}
