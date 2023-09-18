<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomers
 *
 * By default, it deletes all *Customers*. Up to 100 customers per batch can be deleted.
 */
class DeleteCustomers extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	public function __construct()
	{
	}
}
