<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerValidateCredentials\CustomerValidateCredentials as CustomerValidateCredentialsRequest;
use Space48\Bigcommerce\Resource;

class CustomerValidateCredentials extends Resource
{
	public function customerValidateCredentials(): Response
	{
		return $this->connector->send(new CustomerValidateCredentialsRequest());
	}
}
