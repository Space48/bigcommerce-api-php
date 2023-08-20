<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerAttributeValues\CustomersAttributeValuesDelete;
use Space48\BigcommerceApi\Requests\CustomerAttributeValues\CustomersAttributeValuesGet;
use Space48\BigcommerceApi\Requests\CustomerAttributeValues\CustomersAttributeValuesPut;
use Space48\BigcommerceApi\Resource;

class CustomerAttributeValues extends Resource
{
	/**
	 * @param array $customerIdIn Filter items by the customer ID. `customer_id:in=23,24,55`
	 * @param array $attributeIdIn Filter items by the attribute ID. `attribute_id:in=1,2`
	 * @param string $name Filter items by the attribute name. `name=age`
	 * @param string $dateCreated Filter items by `date_created`. `date_created=2018-09-05T13:43:54`
	 * @param string $dateCreatedMax Filter items by maximum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param string $dateCreatedMin Filter items by minimum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param string $dateModified Filter items by `date_modified`. `date_modified=2018-09-05T13:45:03`
	 * @param string $dateModifiedMax Filter items by maximum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param string $dateModifiedMin Filter items by minimum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 */
	public function customersAttributeValuesGet(
		array $customerIdIn,
		array $attributeIdIn,
		string $name,
		string $dateCreated,
		string $dateCreatedMax,
		string $dateCreatedMin,
		string $dateModified,
		string $dateModifiedMax,
		string $dateModifiedMin,
	): Response
	{
		return $this->connector->send(new CustomersAttributeValuesGet($customerIdIn, $attributeIdIn, $name, $dateCreated, $dateCreatedMax, $dateCreatedMin, $dateModified, $dateModifiedMax, $dateModifiedMin));
	}


	public function customersAttributeValuesPut(): Response
	{
		return $this->connector->send(new CustomersAttributeValuesPut());
	}


	/**
	 * @param array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 */
	public function customersAttributeValuesDelete(array $idIn): Response
	{
		return $this->connector->send(new CustomersAttributeValuesDelete($idIn));
	}
}
