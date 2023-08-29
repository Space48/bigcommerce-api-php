<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Products\GetPrices;
use Space48\Bigcommerce\Resource;

class Products extends Resource
{
	public function getPrices(): Response
	{
		return $this->connector->send(new GetPrices());
	}
}
