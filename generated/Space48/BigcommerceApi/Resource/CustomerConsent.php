<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerConsent\CustomersConsentByCustomerIdGet;
use Space48\BigcommerceApi\Requests\CustomerConsent\CustomersConsentByCustomerIdPut;
use Space48\BigcommerceApi\Resource;

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
