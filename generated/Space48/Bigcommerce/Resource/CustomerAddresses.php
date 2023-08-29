<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerAddresses\CustomersAddressesDelete;
use Space48\Bigcommerce\Requests\CustomerAddresses\CustomersAddressesGet;
use Space48\Bigcommerce\Requests\CustomerAddresses\CustomersAddressesPost;
use Space48\Bigcommerce\Requests\CustomerAddresses\CustomersAddressesPut;
use Space48\Bigcommerce\Resource;

class CustomerAddresses extends Resource
{
	/**
	 * @param array $companyIn Filter items by company. `company:in=bigcommerce,commongood`
	 * @param array $nameIn Filter items by first_name and last_name. `name:in=James+Moriarty`
	 * @param array $customerIdIn Filter by the ID of the customer. Also accepts comma-separated IDs to filter for multiple customers. `customer_id:in=23,24,55`
	 * @param string $include Indicates whether to include customer address sub-resources:
	 * * `formfields` - address form fields
	 * `include=formfields`
	 * @param array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 */
	public function customersAddressesGet(
		array $companyIn,
		array $nameIn,
		array $customerIdIn,
		string $include,
		array $idIn,
	): Response
	{
		return $this->connector->send(new CustomersAddressesGet($companyIn, $nameIn, $customerIdIn, $include, $idIn));
	}


	public function customersAddressesPut(): Response
	{
		return $this->connector->send(new CustomersAddressesPut());
	}


	public function customersAddressesPost(): Response
	{
		return $this->connector->send(new CustomersAddressesPost());
	}


	/**
	 * @param array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 */
	public function customersAddressesDelete(array $idIn): Response
	{
		return $this->connector->send(new CustomersAddressesDelete($idIn));
	}
}
