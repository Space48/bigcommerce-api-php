<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CurrentCustomers\GetCurrentCustomer;
use Space48\BigcommerceApi\Resource;

class CurrentCustomers extends Resource
{
	/**
	 * @param string $appClientId This is your applicationʼs client ID, which is obtained during application registration in the Developer Portal.
	 */
	public function getCurrentCustomer(string $appClientId): Response
	{
		return $this->connector->send(new GetCurrentCustomer($appClientId));
	}
}
