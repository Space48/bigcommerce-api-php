<?php

namespace Space48\Bigcommerce\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACountOfCustomerGroups
 *
 * Returns a count of all *Customer Groups*.
 */
class GetAcountOfCustomerGroups extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer_groups/count";
	}


	public function __construct()
	{
	}
}
