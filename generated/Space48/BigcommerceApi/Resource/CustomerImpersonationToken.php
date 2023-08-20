<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerImpersonationToken\CreateTokenWithCustomerImpersonation;
use Space48\BigcommerceApi\Resource;

class CustomerImpersonationToken extends Resource
{
	public function createTokenWithCustomerImpersonation(): Response
	{
		return $this->connector->send(new CreateTokenWithCustomerImpersonation());
	}
}
