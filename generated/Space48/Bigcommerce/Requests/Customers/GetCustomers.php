<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomers
 *
 * Returns a list of all *Customers*. Default sorting is by `customer_ID`, from lowest to highest.
 * Optional parameters can be passed in.
 */
class GetCustomers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	/**
	 * @param null|string $firstName
	 * @param null|string $lastName
	 * @param null|string $company
	 * @param null|string $email
	 * @param null|string $phone
	 * @param null|string $storeCredit
	 * @param null|int $customerGroupId
	 * @param null|int $minId
	 * @param null|int $maxId
	 * @param null|string $minDateCreated
	 * @param null|string $maxDateCreated
	 * @param null|string $minDateModified
	 * @param null|string $maxDateModified
	 * @param null|string $taxExemptCategory
	 */
	public function __construct(
		protected ?string $firstName = null,
		protected ?string $lastName = null,
		protected ?string $company = null,
		protected ?string $email = null,
		protected ?string $phone = null,
		protected ?string $storeCredit = null,
		protected ?int $customerGroupId = null,
		protected ?int $minId = null,
		protected ?int $maxId = null,
		protected ?string $minDateCreated = null,
		protected ?string $maxDateCreated = null,
		protected ?string $minDateModified = null,
		protected ?string $maxDateModified = null,
		protected ?string $taxExemptCategory = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'company' => $this->company,
			'email' => $this->email,
			'phone' => $this->phone,
			'store_credit' => $this->storeCredit,
			'customer_group_id' => $this->customerGroupId,
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'min_date_created' => $this->minDateCreated,
			'max_date_created' => $this->maxDateCreated,
			'min_date_modified' => $this->minDateModified,
			'max_date_modified' => $this->maxDateModified,
			'tax_exempt_category' => $this->taxExemptCategory,
		]);
	}
}
