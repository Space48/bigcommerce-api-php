<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Customers\CustomersDelete;
use Space48\BigcommerceApi\Requests\Customers\CustomersGet;
use Space48\BigcommerceApi\Requests\Customers\CustomersPost;
use Space48\BigcommerceApi\Requests\Customers\CustomersPut;
use Space48\BigcommerceApi\Resource;

class Customers extends Resource
{
	/**
	 * @param array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 * @param array $companyIn Filter items by company. `company:in=bigcommerce,commongood`
	 * @param array $customerGroupIdIn Filter items by customer_group_id. `customer_group_id:in=5,6`
	 * @param string $dateCreated Filter items by date_created. `date_created=2018-09-05T13:43:54`
	 * @param string $dateCreatedMax Filter items by maximum date_created. `date_created:max=2018-09-10`
	 * @param string $dateCreatedMin Filter items by date_created. `date_created:min=2018-09-05`
	 * @param string $dateModified Filter items by date_modified. `date_modified=2018-09-05T13:45:03`
	 * @param string $dateModifiedMin Filter items by minimum date_modified. `date_modified:min=2019-09-04T:00:00:00` or `date_modified:min=2019-09-04`
	 * @param string $dateModifiedMax Filter items by maximum date_modified. `date_modified:max=2018-09-05T13:45:03` or `date_modified:max=2019-09-04`
	 * @param string $emailIn Filter items by email. `email:in=janedoe@example.com`
	 * @param array $nameIn Filter items by first_name and last_name. `name=james moriarty`
	 * @param array $nameLike Filter items by substring in first_name and last_name.
	 * `name:like=moriarty, sherlock`
	 * Concatenates the first_name and last_name fields.
	 * @param array $registrationIpAddressIn Filter items by registration_ip_address. If the customer was created using the API, then registration address is blank.
	 * `registration_ip_address:in=12.345.6.789`
	 * @param string $include Indicates whether to include customer sub-resources:
	 *  * `addresses` - customer addresses
	 *  * `storecredit` - store credit
	 *  * `attributes` - customer attributes and address attributes
	 *  * `formfields` - customer and address form fields
	 *  * `shopper_profile_id` - the ID of the shopper profile associated with the customer (Beta)
	 *  * `segment_ids`- segments the customer belongs to (Beta)
	 *
	 *  `include=addresses,storecredit,attributes,formfields,shopper_profile_id,segment_ids`
	 * @param string $sort Sort items by date_created, date_modified, or last_name:* `date_created:asc` - date created, ascending* `date_created:desc` - date created, descending* `last_name:asc` - last name, ascending* `last_name:desc` - last name, descending * `date_modified:asc` - date modified, ascending* `date_modified:desc`- date modified, descending  Example: `sort=last_name:asc`
	 */
	public function customersGet(
		array $idIn,
		array $companyIn,
		array $customerGroupIdIn,
		string $dateCreated,
		string $dateCreatedMax,
		string $dateCreatedMin,
		string $dateModified,
		string $dateModifiedMin,
		string $dateModifiedMax,
		string $emailIn,
		array $nameIn,
		array $nameLike,
		array $registrationIpAddressIn,
		string $include,
		string $sort,
	): Response
	{
		return $this->connector->send(new CustomersGet($idIn, $companyIn, $customerGroupIdIn, $dateCreated, $dateCreatedMax, $dateCreatedMin, $dateModified, $dateModifiedMin, $dateModifiedMax, $emailIn, $nameIn, $nameLike, $registrationIpAddressIn, $include, $sort));
	}


	public function customersPut(): Response
	{
		return $this->connector->send(new CustomersPut());
	}


	public function customersPost(): Response
	{
		return $this->connector->send(new CustomersPost());
	}


	/**
	 * @param array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 */
	public function customersDelete(array $idIn): Response
	{
		return $this->connector->send(new CustomersDelete($idIn));
	}
}
