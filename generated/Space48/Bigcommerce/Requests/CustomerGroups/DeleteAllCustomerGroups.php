<?php

namespace Space48\Bigcommerce\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllCustomerGroups
 *
 * By default, it deletes all *Customer Groups*.
 * All existing customers are unassigned from the group
 * when it is deleted.
 */
class DeleteAllCustomerGroups extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customer_groups";
	}


	public function __construct()
	{
	}
}
