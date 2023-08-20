<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Tokens\PaymentsAccessTokensPost;
use Space48\BigcommerceApi\Resource;

class Tokens extends Resource
{
	public function paymentsAccessTokensPost(): Response
	{
		return $this->connector->send(new PaymentsAccessTokensPost());
	}
}
