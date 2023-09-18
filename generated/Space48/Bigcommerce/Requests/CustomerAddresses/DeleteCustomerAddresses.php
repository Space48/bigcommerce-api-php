<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomerAddresses
 *
 * By default, it deletes all *Customer Addresses*.
 */
class DeleteCustomerAddresses extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/addresses";
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function __construct(
		protected int $customerId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
