<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\TaxZones\CreateTaxZones;
use Space48\BigcommerceApi\Requests\TaxZones\DeleteTaxZones;
use Space48\BigcommerceApi\Requests\TaxZones\GetTaxZones;
use Space48\BigcommerceApi\Requests\TaxZones\UpdateTaxZones;
use Space48\BigcommerceApi\Resource;

class TaxZones extends Resource
{
	/**
	 * @param array $idIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
	 */
	public function getTaxZones(array $idIn): Response
	{
		return $this->connector->send(new GetTaxZones($idIn));
	}


	public function updateTaxZones(): Response
	{
		return $this->connector->send(new UpdateTaxZones());
	}


	public function createTaxZones(): Response
	{
		return $this->connector->send(new CreateTaxZones());
	}


	/**
	 * @param array $idIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
	 */
	public function deleteTaxZones(array $idIn): Response
	{
		return $this->connector->send(new DeleteTaxZones($idIn));
	}
}
