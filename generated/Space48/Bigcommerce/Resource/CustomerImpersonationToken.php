<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerImpersonationToken\CreateTokenWithCustomerImpersonation;
use Space48\Bigcommerce\Resource;

class CustomerImpersonationToken extends Resource
{
	public function createTokenWithCustomerImpersonation(): Response
	{
		return $this->connector->send(new CreateTokenWithCustomerImpersonation());
	}
}
