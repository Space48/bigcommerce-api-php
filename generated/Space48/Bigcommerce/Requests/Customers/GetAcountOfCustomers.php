<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACountOfCustomers
 *
 * Returns a count of all *Customers*.
 */
class GetAcountOfCustomers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/count";
	}


	public function __construct()
	{
	}
}
