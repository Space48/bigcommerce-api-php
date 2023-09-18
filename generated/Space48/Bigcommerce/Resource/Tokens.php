<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Tokens\CreatePaymentAccessToken;
use Space48\Bigcommerce\Resource;

class Tokens extends Resource
{
	public function createPaymentAccessToken(): Response
	{
		return $this->connector->send(new CreatePaymentAccessToken());
	}
}
