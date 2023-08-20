<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerValidateCredentials\CustomerValidateCredentials as CustomerValidateCredentialsRequest;
use Space48\BigcommerceApi\Resource;

class CustomerValidateCredentials extends Resource
{
	public function customerValidateCredentials(): Response
	{
		return $this->connector->send(new CustomerValidateCredentialsRequest());
	}
}
