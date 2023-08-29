<?php

namespace Space48\Bigcommerce\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACustomerGroup
 *
 * Returns a *Customer Group*.
 */
class GetAcustomerGroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer_groups/{$this->customerGroupId}";
	}


	/**
	 * @param int $customerGroupId The ID of the customer group.
	 * @param string $name Name of the customer groups.
	 * @param string $dateCreated Filter items by date_created. `date_created=2018-09-05T13:43:54`
	 * @param string $dateCreatedMax Filter items by maximum date_created. `date_created:max=2018-09-10`
	 * @param string $dateCreatedMin Filter items by date_created. `date_created:min=2018-09-05`
	 * @param string $dateModified Filter items by date_modified. `date_modified=2018-09-05T13:45:03`
	 * @param string $dateModifiedMin Filter items by minimum date_modified. `date_modified:min=2019-09-04T:00:00:00` or `date_modified:min=2019-09-04`
	 * @param string $dateModifiedMax Filter items by maximum date_modified. `date_modified:max=2018-09-05T13:45:03` or `date_modified:max=2019-09-04`
	 * @param bool $isDefault Whether customers who sign up are added to this group by default.
	 */
	public function __construct(
		protected int $customerGroupId,
		protected string $name,
		protected string $dateCreated,
		protected string $dateCreatedMax,
		protected string $dateCreatedMin,
		protected string $dateModified,
		protected string $dateModifiedMin,
		protected string $dateModifiedMax,
		protected bool $isDefault,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'name' => $this->name,
			'date_created' => $this->dateCreated,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified' => $this->dateModified,
			'date_modified:min' => $this->dateModifiedMin,
			'date_modified:max' => $this->dateModifiedMax,
			'is_default' => $this->isDefault,
		];
	}
}
