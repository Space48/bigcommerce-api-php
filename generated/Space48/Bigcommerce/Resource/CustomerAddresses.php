<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerAddresses\CreateCustomerAddress;
use Space48\Bigcommerce\Requests\CustomerAddresses\DeleteCustomerAddresses;
use Space48\Bigcommerce\Requests\CustomerAddresses\DeletesCustomerAddress;
use Space48\Bigcommerce\Requests\CustomerAddresses\GetCustomerAddress;
use Space48\Bigcommerce\Requests\CustomerAddresses\GetCustomerAddresses;
use Space48\Bigcommerce\Requests\CustomerAddresses\GetCustomerAddressesCount;
use Space48\Bigcommerce\Requests\CustomerAddresses\UpdateCustomerAddress;
use Space48\Bigcommerce\Resource;

class CustomerAddresses extends Resource
{
	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function getCustomerAddresses(int $customerId): Response
	{
		return $this->connector->send(new GetCustomerAddresses($customerId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function createCustomerAddress(int $customerId): Response
	{
		return $this->connector->send(new CreateCustomerAddress($customerId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function deleteCustomerAddresses(int $customerId): Response
	{
		return $this->connector->send(new DeleteCustomerAddresses($customerId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 * @param int $customerAddressId ID of the customer address.
	 */
	public function getCustomerAddress(int $customerId, int $customerAddressId): Response
	{
		return $this->connector->send(new GetCustomerAddress($customerId, $customerAddressId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 * @param int $customerAddressId ID of the customer address.
	 */
	public function updateCustomerAddress(int $customerId, int $customerAddressId): Response
	{
		return $this->connector->send(new UpdateCustomerAddress($customerId, $customerAddressId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 * @param int $customerAddressId ID of the customer address.
	 */
	public function deletesCustomerAddress(int $customerId, int $customerAddressId): Response
	{
		return $this->connector->send(new DeletesCustomerAddress($customerId, $customerAddressId));
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function getCustomerAddressesCount(int $customerId): Response
	{
		return $this->connector->send(new GetCustomerAddressesCount($customerId));
	}
}
