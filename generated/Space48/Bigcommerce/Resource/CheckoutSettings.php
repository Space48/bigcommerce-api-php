<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutSettings\GetCheckoutSettings;
use Space48\Bigcommerce\Requests\CheckoutSettings\UpdateCheckoutSettings;
use Space48\Bigcommerce\Resource;

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
