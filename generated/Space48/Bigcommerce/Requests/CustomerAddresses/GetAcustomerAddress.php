<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACustomerAddress
 *
 * Returns a *Customer Address*.
 */
class GetAcustomerAddress extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/addresses/{$this->customerAddressId}";
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 * @param int $customerAddressId ID of the customer address.
	 */
	public function __construct(
		protected int $customerId,
		protected int $customerAddressId,
	) {
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
