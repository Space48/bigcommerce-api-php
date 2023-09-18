<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ShippingZones\CreateShippingZones;
use Space48\Bigcommerce\Requests\ShippingZones\DeleteShippingZone;
use Space48\Bigcommerce\Requests\ShippingZones\GetShippingZone;
use Space48\Bigcommerce\Requests\ShippingZones\GetShippingZones;
use Space48\Bigcommerce\Requests\ShippingZones\UpdateShippingZone;
use Space48\Bigcommerce\Resource;

class ShippingZones extends Resource
{
	public function getShippingZones(): Response
	{
		return $this->connector->send(new GetShippingZones());
	}


	public function createShippingZones(): Response
	{
		return $this->connector->send(new CreateShippingZones());
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function getShippingZone(int $id): Response
	{
		return $this->connector->send(new GetShippingZone($id));
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function updateShippingZone(int $id): Response
	{
		return $this->connector->send(new UpdateShippingZone($id));
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function deleteShippingZone(int $id): Response
	{
		return $this->connector->send(new DeleteShippingZone($id));
	}
}
