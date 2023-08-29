<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerPasswords\ValidateCustomerPassword;
use Space48\Bigcommerce\Resource;

class CustomerPasswords extends Resource
{
	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function validateCustomerPassword(int $customerId): Response
	{
		return $this->connector->send(new ValidateCustomerPassword($customerId));
	}
}
