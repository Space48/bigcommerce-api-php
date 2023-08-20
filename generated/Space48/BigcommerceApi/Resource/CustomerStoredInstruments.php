<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerStoredInstruments\Liststoredinstruments;
use Space48\BigcommerceApi\Resource;

class CustomerStoredInstruments extends Resource
{
	/**
	 * @param string $customerId
	 */
	public function liststoredinstruments(string $customerId): Response
	{
		return $this->connector->send(new Liststoredinstruments($customerId));
	}
}
