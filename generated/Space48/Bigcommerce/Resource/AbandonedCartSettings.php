<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\AbandonedCartSettings\GetGlobalAbandonedCartSettings;
use Space48\Bigcommerce\Resource;

class AbandonedCartSettings extends Resource
{
	public function getGlobalAbandonedCartSettings(): Response
	{
		return $this->connector->send(new GetGlobalAbandonedCartSettings());
	}
}
