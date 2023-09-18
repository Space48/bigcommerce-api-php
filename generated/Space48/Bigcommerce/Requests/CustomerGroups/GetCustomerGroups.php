<?php

namespace Space48\Bigcommerce\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomerGroups
 *
 * Returns a list of *Customer Groups*. Default sorting is by customer-group ID, from lowest to
 * highest.
 */
class GetCustomerGroups extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer_groups";
	}


	/**
	 * @param null|string $name Filter customer groups by exact name match.
	 * @param null|string $nameLike Filter customer groups by name, using a fuzzy matching method.
	 * @param null|bool $isDefault Filter by customers who sign up are added to this group by default.
	 * @param null|string $dateCreated Filter customer groups by date_created. `date_created=2018-09-05T13:43:54`
	 * @param null|string $dateCreatedMax Filter customer groups by maximum date_created. `date_created:max=2018-09-10`
	 * @param null|string $dateCreatedMin Filter customer groups by date_created. `date_created:min=2018-09-05`
	 * @param null|string $dateModified Filter customer groups by date_modified. `date_modified=2018-09-05T13:45:03`
	 * @param null|string $dateModifiedMin Filter customer groups by minimum date_modified. `date_modified:min=2019-09-04T:00:00:00` or `date_modified:min=2019-09-04`
	 * @param null|string $dateModifiedMax Filter customer groups by maximum date_modified. `date_modified:max=2018-09-05T13:45:03` or `date_modified:max=2019-09-04`
	 * @param null|bool $isGroupForGuests Filter whether the group is for guests. There can only be one customer group for guests at a time.
	 */
	public function __construct(
		protected ?string $name = null,
		protected ?string $nameLike = null,
		protected ?bool $isDefault = null,
		protected ?string $dateCreated = null,
		protected ?string $dateCreatedMax = null,
		protected ?string $dateCreatedMin = null,
		protected ?string $dateModified = null,
		protected ?string $dateModifiedMin = null,
		protected ?string $dateModifiedMax = null,
		protected ?bool $isGroupForGuests = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'is_default' => $this->isDefault,
			'date_created' => $this->dateCreated,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified' => $this->dateModified,
			'`date_modified:min`' => $this->dateModifiedMin,
			'`date_modified:max`' => $this->dateModifiedMax,
			'is_group_for_guests' => $this->isGroupForGuests,
		]);
	}
}
