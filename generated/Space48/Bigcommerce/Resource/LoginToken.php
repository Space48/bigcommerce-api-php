<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\LoginToken\LoginToken as LoginTokenRequest;
use Space48\Bigcommerce\Resource;

class LoginToken extends Resource
{
	/**
	 * @param string $jwtToken
	 */
	public function loginToken(string $jwtToken): Response
	{
		return $this->connector->send(new LoginTokenRequest($jwtToken));
	}
}
