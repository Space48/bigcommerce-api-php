<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutSettings\GetCheckoutSettings;
use Space48\BigcommerceApi\Requests\CheckoutSettings\UpdateCheckoutSettings;
use Space48\BigcommerceApi\Resource;

class CheckoutSettings extends Resource
{
	public function getCheckoutSettings(): Response
	{
		return $this->connector->send(new GetCheckoutSettings());
	}


	public function updateCheckoutSettings(): Response
	{
		return $this->connector->send(new UpdateCheckoutSettings());
	}
}
