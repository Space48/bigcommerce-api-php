<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ShippingProvider\RequestShippingRates;
use Space48\Bigcommerce\Requests\ShippingProvider\ValidateConnectionOptions;
use Space48\Bigcommerce\Resource;

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
