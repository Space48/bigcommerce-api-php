<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ApiToken\CreateToken;
use Space48\BigcommerceApi\Requests\ApiToken\RevokeToken;
use Space48\BigcommerceApi\Resource;

class ApiToken extends Resource
{
	public function createToken(): Response
	{
		return $this->connector->send(new CreateToken());
	}


	public function revokeToken(): Response
	{
		return $this->connector->send(new RevokeToken());
	}
}
