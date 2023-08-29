<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Summary\GetCatalogSummary;
use Space48\Bigcommerce\Resource;

class Summary extends Resource
{
	public function getCatalogSummary(): Response
	{
		return $this->connector->send(new GetCatalogSummary());
	}
}
