<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ShippingCarrier\CreateAcarrierConnection;
use Space48\BigcommerceApi\Requests\ShippingCarrier\DeleteCarrierConnection;
use Space48\BigcommerceApi\Requests\ShippingCarrier\UpdateAcarrierConnection;
use Space48\BigcommerceApi\Resource;

class ShippingCarrier extends Resource
{
	public function updateAcarrierConnection(): Response
	{
		return $this->connector->send(new UpdateAcarrierConnection());
	}


	public function createAcarrierConnection(): Response
	{
		return $this->connector->send(new CreateAcarrierConnection());
	}


	public function deleteCarrierConnection(): Response
	{
		return $this->connector->send(new DeleteCarrierConnection());
	}
}
