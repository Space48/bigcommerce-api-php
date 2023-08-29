<?php

namespace Space48\Bigcommerce\Requests\CustomerAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersAttributesGet
 *
 * Returns a list of Customer Attributes. You can pass in optional filter parameters.
 */
class CustomersAttributesGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/attributes";
	}


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
	public function __construct(
		protected string $name,
		protected string $nameLike,
		protected string $type,
		protected string $dateCreated,
		protected string $dateCreatedMax,
		protected string $dateCreatedMin,
		protected string $dateModified,
		protected string $dateModifiedMax,
		protected string $dateModifiedMin,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'type' => $this->type,
			'date_created' => $this->dateCreated,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified' => $this->dateModified,
			'date_modified:max' => $this->dateModifiedMax,
			'date_modified:min' => $this->dateModifiedMin,
		];
	}
}
