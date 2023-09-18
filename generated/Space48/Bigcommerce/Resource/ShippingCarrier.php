<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ShippingCarrier\CreateCarrierConnection;
use Space48\Bigcommerce\Requests\ShippingCarrier\DeleteCarrierConnection;
use Space48\Bigcommerce\Requests\ShippingCarrier\UpdateCarrierConnection;
use Space48\Bigcommerce\Resource;

class ShippingCarrier extends Resource
{
	public function updateCarrierConnection(): Response
	{
		return $this->connector->send(new UpdateCarrierConnection());
	}


	public function createCarrierConnection(): Response
	{
		return $this->connector->send(new CreateCarrierConnection());
	}


	public function deleteCarrierConnection(): Response
	{
		return $this->connector->send(new DeleteCarrierConnection());
	}
}
