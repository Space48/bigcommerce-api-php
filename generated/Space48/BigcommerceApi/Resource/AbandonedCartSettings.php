<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\AbandonedCartSettings\GetGlobalAbandonedCartSettings;
use Space48\BigcommerceApi\Resource;

class AbandonedCartSettings extends Resource
{
	public function getGlobalAbandonedCartSettings(): Response
	{
		return $this->connector->send(new GetGlobalAbandonedCartSettings());
	}
}
