<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerGroups\CreateCustomerGroup;
use Space48\Bigcommerce\Requests\CustomerGroups\DeleteCustomerGroup;
use Space48\Bigcommerce\Requests\CustomerGroups\DeleteCustomerGroups;
use Space48\Bigcommerce\Requests\CustomerGroups\GetCustomerGroup;
use Space48\Bigcommerce\Requests\CustomerGroups\GetCustomerGroups;
use Space48\Bigcommerce\Requests\CustomerGroups\GetCustomerGroupsCount;
use Space48\Bigcommerce\Requests\CustomerGroups\UpdateCustomerGroup;
use Space48\Bigcommerce\Resource;

class CustomerGroups extends Resource
{
	/**
	 * @param string $name Filter customer groups by exact name match.
	 * @param string $nameLike Filter customer groups by name, using a fuzzy matching method.
	 * @param bool $isDefault Filter by customers who sign up are added to this group by default.
	 * @param string $dateCreated Filter customer groups by date_created. `date_created=2018-09-05T13:43:54`
	 * @param string $dateCreatedMax Filter customer groups by maximum date_created. `date_created:max=2018-09-10`
	 * @param string $dateCreatedMin Filter customer groups by date_created. `date_created:min=2018-09-05`
	 * @param string $dateModified Filter customer groups by date_modified. `date_modified=2018-09-05T13:45:03`
	 * @param string $dateModifiedMin Filter customer groups by minimum date_modified. `date_modified:min=2019-09-04T:00:00:00` or `date_modified:min=2019-09-04`
	 * @param string $dateModifiedMax Filter customer groups by maximum date_modified. `date_modified:max=2018-09-05T13:45:03` or `date_modified:max=2019-09-04`
	 * @param bool $isGroupForGuests Filter whether the group is for guests. There can only be one customer group for guests at a time.
	 */
	public function getCustomerGroups(
		?string $name,
		?string $nameLike,
		?bool $isDefault,
		?string $dateCreated,
		?string $dateCreatedMax,
		?string $dateCreatedMin,
		?string $dateModified,
		?string $dateModifiedMin,
		?string $dateModifiedMax,
		?bool $isGroupForGuests,
	): Response
	{
		return $this->connector->send(new GetCustomerGroups($name, $nameLike, $isDefault, $dateCreated, $dateCreatedMax, $dateCreatedMin, $dateModified, $dateModifiedMin, $dateModifiedMax, $isGroupForGuests));
	}


	public function createCustomerGroup(): Response
	{
		return $this->connector->send(new CreateCustomerGroup());
	}


	public function deleteCustomerGroups(): Response
	{
		return $this->connector->send(new DeleteCustomerGroups());
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
	public function getCustomerGroup(
		int $customerGroupId,
		?string $name,
		?string $dateCreated,
		?string $dateCreatedMax,
		?string $dateCreatedMin,
		?string $dateModified,
		?string $dateModifiedMin,
		?string $dateModifiedMax,
		?bool $isDefault,
	): Response
	{
		return $this->connector->send(new GetCustomerGroup($customerGroupId, $name, $dateCreated, $dateCreatedMax, $dateCreatedMin, $dateModified, $dateModifiedMin, $dateModifiedMax, $isDefault));
	}


	/**
	 * @param int $customerGroupId The ID of the customer group.
	 */
	public function updateCustomerGroup(int $customerGroupId): Response
	{
		return $this->connector->send(new UpdateCustomerGroup($customerGroupId));
	}


	/**
	 * @param int $customerGroupId The ID of the customer group.
	 */
	public function deleteCustomerGroup(int $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomerGroup($customerGroupId));
	}


	public function getCustomerGroupsCount(): Response
	{
		return $this->connector->send(new GetCustomerGroupsCount());
	}
}
