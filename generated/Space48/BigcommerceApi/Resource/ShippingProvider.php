<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ShippingProvider\RequestShippingRates;
use Space48\BigcommerceApi\Requests\ShippingProvider\ValidateConnectionOptions;
use Space48\BigcommerceApi\Resource;

class ShippingProvider extends Resource
{
	public function requestShippingRates(): Response
	{
		return $this->connector->send(new RequestShippingRates());
	}


	public function validateConnectionOptions(): Response
	{
		return $this->connector->send(new ValidateConnectionOptions());
	}
}
