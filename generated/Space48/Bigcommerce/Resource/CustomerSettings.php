<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerSettings\GetCustomersSettings;
use Space48\Bigcommerce\Requests\CustomerSettings\UpdateCustomersSettings;
use Space48\Bigcommerce\Resource;

class CustomerSettings extends Resource
{
	public function getCustomersSettings(): Response
	{
		return $this->connector->send(new GetCustomersSettings());
	}


	public function updateCustomersSettings(): Response
	{
		return $this->connector->send(new UpdateCustomersSettings());
	}
}
