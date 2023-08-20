<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Summary\GetCatalogSummary;
use Space48\BigcommerceApi\Resource;

class Summary extends Resource
{
	public function getCatalogSummary(): Response
	{
		return $this->connector->send(new GetCatalogSummary());
	}
}
