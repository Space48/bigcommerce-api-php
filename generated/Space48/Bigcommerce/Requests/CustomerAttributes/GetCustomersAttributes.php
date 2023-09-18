<?php

namespace Space48\Bigcommerce\Requests\CustomerAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomersAttributes
 *
 * Returns a list of Customer Attributes. You can pass in optional filter parameters.
 */
class GetCustomersAttributes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/attributes";
	}


	/**
	 * @param null|string $name Filter items by customer attribute name. `name=Date+Joined`
	 * @param null|string $nameLike Filter items by substring in customer attribute name. `name:like=join`
	 * @param null|string $type The type of the customer attribute.
	 * @param null|string $dateCreated Filter items by `date_created`. `date_created=2021-01-07T20:28:16Z`
	 * @param null|string $dateCreatedMax Filter items by maximum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param null|string $dateCreatedMin Filter items by minimum `date_created`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param null|string $dateModified Filter items by `date_modified`.
	 * @param null|string $dateModifiedMax Filter items by maximum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 * @param null|string $dateModifiedMin Filter items by minimum `date_modified`. ISO 8601 full-date is required, ISO 8601 full-time is not required. UNIX timestamp also accepted. `date_created=2021-01-07` or `date_created=1610051296000`
	 */
	public function __construct(
		protected ?string $name = null,
		protected ?string $nameLike = null,
		protected ?string $type = null,
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
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'type' => $this->type,
			'date_created' => $this->dateCreated,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified' => $this->dateModified,
			'date_modified:max' => $this->dateModifiedMax,
			'date_modified:min' => $this->dateModifiedMin,
		]);
	}
}
