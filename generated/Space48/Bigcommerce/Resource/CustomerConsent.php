<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerConsent\CustomersConsentByCustomerIdGet;
use Space48\Bigcommerce\Requests\CustomerConsent\CustomersConsentByCustomerIdPut;
use Space48\Bigcommerce\Resource;

class CustomerConsent extends Resource
{
	/**
	 * @param string $customerId
	 */
	public function customersConsentByCustomerIdGet(string $customerId): Response
	{
		return $this->connector->send(new CustomersConsentByCustomerIdGet($customerId));
	}


	/**
	 * @param string $customerId
	 * @param string $customerId
	 */
	public function customersConsentByCustomerIdPut(string $customerId): Response
	{
		return $this->connector->send(new CustomersConsentByCustomerIdPut($customerId, $customerId));
	}
}
