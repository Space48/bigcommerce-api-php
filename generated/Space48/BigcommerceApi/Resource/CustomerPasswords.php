<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerPasswords\ValidateCustomerPassword;
use Space48\BigcommerceApi\Resource;

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
