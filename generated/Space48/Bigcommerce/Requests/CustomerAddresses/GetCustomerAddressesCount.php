<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomerAddressesCount
 *
 * Returns a count of addresses for a customer.
 */
class GetCustomerAddressesCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/addresses/count";
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
