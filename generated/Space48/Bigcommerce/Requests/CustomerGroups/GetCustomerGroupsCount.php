<?php

namespace Space48\Bigcommerce\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomerGroupsCount
 *
 * Returns a count of all *Customer Groups*.
 */
class GetCustomerGroupsCount extends Request
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
