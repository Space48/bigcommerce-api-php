<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ShippingZones\CreateAshippingZones;
use Space48\Bigcommerce\Requests\ShippingZones\DeleteAshippingZone;
use Space48\Bigcommerce\Requests\ShippingZones\GetAllShippingZones;
use Space48\Bigcommerce\Requests\ShippingZones\GetAshippingZone;
use Space48\Bigcommerce\Requests\ShippingZones\UpdateAshippingZone;
use Space48\Bigcommerce\Resource;

class ShippingZones extends Resource
{
	public function getAllShippingZones(): Response
	{
		return $this->connector->send(new GetAllShippingZones());
	}


	public function createAshippingZones(): Response
	{
		return $this->connector->send(new CreateAshippingZones());
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function getAshippingZone(int $id): Response
	{
		return $this->connector->send(new GetAshippingZone($id));
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function updateAshippingZone(int $id): Response
	{
		return $this->connector->send(new UpdateAshippingZone($id));
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function deleteAshippingZone(int $id): Response
	{
		return $this->connector->send(new DeleteAshippingZone($id));
	}
}
