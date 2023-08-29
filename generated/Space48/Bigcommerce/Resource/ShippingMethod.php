<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ShippingMethod\CreateAshippingMethod;
use Space48\Bigcommerce\Requests\ShippingMethod\DeleteAshippingMethod;
use Space48\Bigcommerce\Requests\ShippingMethod\GetAshippingMethod;
use Space48\Bigcommerce\Requests\ShippingMethod\GetShippingMethodsZone;
use Space48\Bigcommerce\Requests\ShippingMethod\UpdateAshippingMethod;
use Space48\Bigcommerce\Resource;

class ShippingMethod extends Resource
{
	/**
	 * @param int $zoneId ID of the shipping zone.
	 */
	public function getShippingMethodsZone(int $zoneId): Response
	{
		return $this->connector->send(new GetShippingMethodsZone($zoneId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 */
	public function createAshippingMethod(int $zoneId): Response
	{
		return $this->connector->send(new CreateAshippingMethod($zoneId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function getAshippingMethod(int $zoneId, int $methodId): Response
	{
		return $this->connector->send(new GetAshippingMethod($zoneId, $methodId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function updateAshippingMethod(int $zoneId, int $methodId): Response
	{
		return $this->connector->send(new UpdateAshippingMethod($zoneId, $methodId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function deleteAshippingMethod(int $zoneId, int $methodId): Response
	{
		return $this->connector->send(new DeleteAshippingMethod($zoneId, $methodId));
	}
}
