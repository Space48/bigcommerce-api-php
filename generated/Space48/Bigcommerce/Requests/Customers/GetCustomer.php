<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomer
 *
 * Returns a single *Customer*.
 */
class GetCustomer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}";
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function __construct(
		protected int $customerId,
	) {
	}
}
