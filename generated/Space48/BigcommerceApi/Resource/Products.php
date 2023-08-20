<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Products\GetPrices;
use Space48\BigcommerceApi\Resource;

class Products extends Resource
{
	public function getPrices(): Response
	{
		return $this->connector->send(new GetPrices());
	}
}
