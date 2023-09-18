<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Customers\CreateCustomer;
use Space48\Bigcommerce\Requests\Customers\DeleteCustomer;
use Space48\Bigcommerce\Requests\Customers\DeleteCustomers;
use Space48\Bigcommerce\Requests\Customers\GetCustomer;
use Space48\Bigcommerce\Requests\Customers\GetCustomers;
use Space48\Bigcommerce\Requests\Customers\GetCustomersCount;
use Space48\Bigcommerce\Requests\Customers\UpdateCustomer;
use Space48\Bigcommerce\Resource;

class Customers extends Resource
{
	/**
	 * @param string $firstName
	 * @param string $lastName
	 * @param string $company
	 * @param string $email
	 * @param string $phone
	 * @param string $storeCredit
	 * @param int $customerGroupId
	 * @param int $minId
	 * @param int $maxId
	 * @param string $minDateCreated
	 * @param string $maxDateCreated
	 * @param string $minDateModified
	 * @param string $maxDateModified
	 * @param string $taxExemptCategory
	 */
	public function getCustomers(
		?string $firstName,
		?string $lastName,
		?string $company,
		?string $email,
		?string $phone,
		?string $storeCredit,
		?int $customerGroupId,
		?int $minId,
		?int $maxId,
		?string $minDateCreated,
		?string $maxDateCreated,
		?string $minDateModified,
		?string $maxDateModified,
		?string $taxExemptCategory,
	): Response
	{
		return $this->connector->send(new GetCustomers($firstName, $lastName, $company, $email, $phone, $storeCredit, $customerGroupId, $minId, $maxId, $minDateCreated, $maxDateCreated, $minDateModified, $maxDateModified, $taxExemptCategory));
	}


	public function createCustomer(): Response
	{
		return $this->connector->send(new CreateCustomer());
	}


	public function deleteCustomers(): Response
	{
		return $this->connector->send(new DeleteCustomers());
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function getCustomer(int $customerId): Response
	{
		return $this->connector->send(new GetCustomer($customerId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function updateCustomer(int $customerId): Response
	{
		return $this->connector->send(new UpdateCustomer($customerId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function deleteCustomer(int $customerId): Response
	{
		return $this->connector->send(new DeleteCustomer($customerId));
	}


	public function getCustomersCount(): Response
	{
		return $this->connector->send(new GetCustomersCount());
	}
}
