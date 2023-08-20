<?php

namespace Space48\BigcommerceApi\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllCustomers
 *
 * By default, it deletes all *Customers*. Up to 100 customers per batch can be deleted.
 */
class DeleteAllCustomers extends Request
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
