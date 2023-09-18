<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerConsent\GetCustomerConsent;
use Space48\Bigcommerce\Requests\CustomerConsent\UpdateCustomerConsent;
use Space48\Bigcommerce\Resource;

class CustomerConsent extends Resource
{
	/**
	 * @param string $customerId
	 */
	public function getCustomerConsent(string $customerId): Response
	{
		return $this->connector->send(new GetCustomerConsent($customerId));
	}


	/**
	 * @param string $customerId
	 */
	public function updateCustomerConsent(string $customerId): Response
	{
		return $this->connector->send(new UpdateCustomerConsent($customerId));
	}
}
