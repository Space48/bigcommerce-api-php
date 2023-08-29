<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ApiToken\CreateToken;
use Space48\Bigcommerce\Requests\ApiToken\RevokeToken;
use Space48\Bigcommerce\Resource;

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
