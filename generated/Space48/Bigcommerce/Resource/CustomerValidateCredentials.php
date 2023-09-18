<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerValidateCredentials\ValidateCustomerCredentials;
use Space48\Bigcommerce\Resource;

class CustomerValidateCredentials extends Resource
{
	public function validateCustomerCredentials(): Response
	{
		return $this->connector->send(new ValidateCustomerCredentials());
	}
}
