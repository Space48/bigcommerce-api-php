<?php

namespace Space48\BigcommerceApi\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateACustomerGroup
 *
 * Updates a *Customer Group*.
 *
 * **Notes**
 *
 * Any combination of fields can be updated at once. Discount
 * rules are treated in bulk. The entire set of rules is overwritten when a request is sent.
 */
class UpdateAcustomerGroup extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customer_groups/{$this->customerGroupId}";
	}


	/**
	 * @param int $customerGroupId The ID of the customer group.
	 */
	public function __construct(
		protected int $customerGroupId,
	) {
	}
}
