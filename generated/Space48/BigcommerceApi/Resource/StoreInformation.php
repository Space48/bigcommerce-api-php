<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\StoreInformation\GetStoreInformation;
use Space48\BigcommerceApi\Resource;

class StoreInformation extends Resource
{
	public function getStoreInformation(): Response
	{
		return $this->connector->send(new GetStoreInformation());
	}
}
