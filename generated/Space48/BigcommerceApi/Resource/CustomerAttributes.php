<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerAttributes\CustomersAttributesDelete;
use Space48\BigcommerceApi\Requests\CustomerAttributes\CustomersAttributesGet;
use Space48\BigcommerceApi\Requests\CustomerAttributes\CustomersAttributesPost;
use Space48\BigcommerceApi\Requests\CustomerAttributes\CustomersAttributesPut;
use Space48\BigcommerceApi\Resource;

class CustomerAttributes extends Resource
{
	/**
	 * @param string $name Filter items by customer attribute name. `name=Date+Joined`
	 * @param string $nameLike Filter items by substring in customer attribute name. `name:like=join`
	 * @param string $type The type of the customer attribute.
	 * @param string $dateCreated Filter items by `date_created`. `date_created=2021-01-07T20:28:16Z`
	 * @param string $dateCreatedMax Filter items by maximum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param string $dateCreatedMin Filter items by minimum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param string $dateModified Filter items by `date_modified`.
	 * @param string $dateModifiedMax Filter items by maximum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param string $dateModifiedMin Filter items by minimum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 */
	public function customersAttributesGet(
		string $name,
		string $nameLike,
		string $type,
		string $dateCreated,
		string $dateCreatedMax,
		string $dateCreatedMin,
		string $dateModified,
		string $dateModifiedMax,
		string $dateModifiedMin,
	): Response
	{
		return $this->connector->send(new CustomersAttributesGet($name, $nameLike, $type, $dateCreated, $dateCreatedMax, $dateCreatedMin, $dateModified, $dateModifiedMax, $dateModifiedMin));
	}


	public function customersAttributesPut(): Response
	{
		return $this->connector->send(new CustomersAttributesPut());
	}


	public function customersAttributesPost(): Response
	{
		return $this->connector->send(new CustomersAttributesPost());
	}


	/**
	 * @param array $idIn Filter items by ID.
	 */
	public function customersAttributesDelete(array $idIn): Response
	{
		return $this->connector->send(new CustomersAttributesDelete($idIn));
	}
}
