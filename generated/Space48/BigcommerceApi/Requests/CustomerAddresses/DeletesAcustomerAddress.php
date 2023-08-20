<?php

namespace Space48\BigcommerceApi\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletesACustomerAddress
 *
 * Deletes a *Customer Address*.
 */
class DeletesAcustomerAddress extends Request
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
