<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StoreLocale\GetLocaleSettings;
use Space48\Bigcommerce\Requests\StoreLocale\UpdateLocaleSettings;
use Space48\Bigcommerce\Resource;

class StoreLocale extends Resource
{
	public function getLocaleSettings(): Response
	{
		return $this->connector->send(new GetLocaleSettings());
	}


	public function updateLocaleSettings(): Response
	{
		return $this->connector->send(new UpdateLocaleSettings());
	}
}
