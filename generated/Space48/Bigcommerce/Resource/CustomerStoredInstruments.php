<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerStoredInstruments\GetCustomerStoredInstruments;
use Space48\Bigcommerce\Resource;

class CustomerStoredInstruments extends Resource
{
	/**
	 * @param string $customerId
	 */
	public function getCustomerStoredInstruments(string $customerId): Response
	{
		return $this->connector->send(new GetCustomerStoredInstruments($customerId));
	}
}
