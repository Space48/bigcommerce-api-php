<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletesCustomerAddress
 *
 * Deletes a *Customer Address*.
 */
class DeletesCustomerAddress extends Request
{
	protected Method $method = Method::DELETE;


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
}
