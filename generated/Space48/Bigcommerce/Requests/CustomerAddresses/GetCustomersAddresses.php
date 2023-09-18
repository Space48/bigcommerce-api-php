<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomersAddresses
 *
 * Returns a list of Customer Addresses. Optional filter parameters can be passed in.
 */
class GetCustomersAddresses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/addresses";
	}


	/**
	 * @param null|array $companyIn Filter items by company. `company:in=bigcommerce,commongood`
	 * @param null|array $nameIn Filter items by first_name and last_name. `name:in=James+Moriarty`
	 * @param null|array $customerIdIn Filter by the ID of the customer. Also accepts comma-separated IDs to filter for multiple customers. `customer_id:in=23,24,55`
	 * @param null|string $include Indicates whether to include customer address sub-resources:
	 * * `formfields` - address form fields
	 * `include=formfields`
	 * @param null|array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 */
	public function __construct(
		protected ?array $companyIn = null,
		protected ?array $nameIn = null,
		protected ?array $customerIdIn = null,
		protected ?string $include = null,
		protected ?array $idIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'company:in' => $this->companyIn,
			'name:in' => $this->nameIn,
			'customer_id:in' => $this->customerIdIn,
			'include' => $this->include,
			'id:in' => $this->idIn,
		]);
	}
}
