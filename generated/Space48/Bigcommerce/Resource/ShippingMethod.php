<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ShippingMethod\CreateShippingMethod;
use Space48\Bigcommerce\Requests\ShippingMethod\DeleteShippingMethod;
use Space48\Bigcommerce\Requests\ShippingMethod\GetShippingMethod;
use Space48\Bigcommerce\Requests\ShippingMethod\GetShippingZoneMethods;
use Space48\Bigcommerce\Requests\ShippingMethod\UpdateShippingMethod;
use Space48\Bigcommerce\Resource;

class ShippingMethod extends Resource
{
	/**
	 * @param int $zoneId ID of the shipping zone.
	 */
	public function getShippingZoneMethods(int $zoneId): Response
	{
		return $this->connector->send(new GetShippingZoneMethods($zoneId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 */
	public function createShippingMethod(int $zoneId): Response
	{
		return $this->connector->send(new CreateShippingMethod($zoneId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function getShippingMethod(int $zoneId, int $methodId): Response
	{
		return $this->connector->send(new GetShippingMethod($zoneId, $methodId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function updateShippingMethod(int $zoneId, int $methodId): Response
	{
		return $this->connector->send(new UpdateShippingMethod($zoneId, $methodId));
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function deleteShippingMethod(int $zoneId, int $methodId): Response
	{
		return $this->connector->send(new DeleteShippingMethod($zoneId, $methodId));
	}
}
