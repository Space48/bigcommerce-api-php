<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersAddressesGet
 *
 * Returns a list of Customer Addresses. Optional filter parameters can be passed in.
 */
class CustomersAddressesGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/addresses";
	}


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
	public function __construct(
		protected array $companyIn,
		protected array $nameIn,
		protected array $customerIdIn,
		protected string $include,
		protected array $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'company:in' => $this->companyIn,
			'name:in' => $this->nameIn,
			'customer_id:in' => $this->customerIdIn,
			'include' => $this->include,
			'id:in' => $this->idIn,
		];
	}
}
