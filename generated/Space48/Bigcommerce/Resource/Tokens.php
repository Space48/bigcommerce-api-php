<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Tokens\PaymentsAccessTokensPost;
use Space48\Bigcommerce\Resource;

class Tokens extends Resource
{
	public function paymentsAccessTokensPost(): Response
	{
		return $this->connector->send(new PaymentsAccessTokensPost());
	}
}
