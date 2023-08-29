<?php

namespace Space48\Bigcommerce\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteACustomerGroup
 *
 * Deletes a *Customer Group*.
 *
 * **Notes**
 * All existing customers are unassigned from the group when it
 * is deleted.
 */
class DeleteAcustomerGroup extends Request
{
	protected Method $method = Method::DELETE;


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
