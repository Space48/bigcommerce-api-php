<?php

namespace Space48\BigcommerceApi\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCustomers
 *
 * Returns a list of all *Customers*. Default sorting is by `customer_ID`, from lowest to highest.
 * Optional parameters can be passed in.
 */
class GetAllCustomers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	/**
	 * @param string $firstName
	 * @param string $lastName
	 * @param string $company
	 * @param string $email
	 * @param string $phone
	 * @param string $storeCredit
	 * @param int $customerGroupId
	 * @param int $minId
	 * @param int $maxId
	 * @param string $minDateCreated
	 * @param string $maxDateCreated
	 * @param string $minDateModified
	 * @param string $maxDateModified
	 * @param string $taxExemptCategory
	 */
	public function __construct(
		protected string $firstName,
		protected string $lastName,
		protected string $company,
		protected string $email,
		protected string $phone,
		protected string $storeCredit,
		protected int $customerGroupId,
		protected int $minId,
		protected int $maxId,
		protected string $minDateCreated,
		protected string $maxDateCreated,
		protected string $minDateModified,
		protected string $maxDateModified,
		protected string $taxExemptCategory,
	) {
	}


	public function defaultQuery(): array
	{
		return [
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
		];
	}
}
