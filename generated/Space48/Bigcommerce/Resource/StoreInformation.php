<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StoreInformation\GetStoreInformation;
use Space48\Bigcommerce\Resource;

class StoreInformation extends Resource
{
	public function getStoreInformation(): Response
	{
		return $this->connector->send(new GetStoreInformation());
	}
}
