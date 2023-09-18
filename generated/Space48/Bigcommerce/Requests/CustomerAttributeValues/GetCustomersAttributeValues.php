<?php

namespace Space48\Bigcommerce\Requests\CustomerAttributeValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomersAttributeValues
 *
 * Returns a list of Customer Attribute Values. Optional filter parameters can be passed in.
 */
class GetCustomersAttributeValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/attribute-values";
	}


	/**
	 * @param null|array $customerIdIn Filter items by the customer ID. `customer_id:in=23,24,55`
	 * @param null|array $attributeIdIn Filter items by the attribute ID. `attribute_id:in=1,2`
	 * @param null|string $name Filter items by the attribute name. `name=age`
	 * @param null|string $dateCreated Filter items by `date_created`. `date_created=2018-09-05T13:43:54`
	 * @param null|string $dateCreatedMax Filter items by maximum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param null|string $dateCreatedMin Filter items by minimum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param null|string $dateModified Filter items by `date_modified`. `date_modified=2018-09-05T13:45:03`
	 * @param null|string $dateModifiedMax Filter items by maximum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param null|string $dateModifiedMin Filter items by minimum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 */
	public function __construct(
		protected ?array $customerIdIn = null,
		protected ?array $attributeIdIn = null,
		protected ?string $name = null,
		protected ?string $dateCreated = null,
		protected ?string $dateCreatedMax = null,
		protected ?string $dateCreatedMin = null,
		protected ?string $dateModified = null,
		protected ?string $dateModifiedMax = null,
		protected ?string $dateModifiedMin = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'customer_id:in' => $this->customerIdIn,
			'attribute_id:in' => $this->attributeIdIn,
			'name' => $this->name,
			'date_created' => $this->dateCreated,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified' => $this->dateModified,
			'date_modified:max' => $this->dateModifiedMax,
			'date_modified:min' => $this->dateModifiedMin,
		]);
	}
}
