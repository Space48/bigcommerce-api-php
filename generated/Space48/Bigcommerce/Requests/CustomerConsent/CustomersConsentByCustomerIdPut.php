<?php

namespace Space48\Bigcommerce\Requests\CustomerConsent;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersConsentByCustomerId_PUT
 *
 * Updates the status of a customer's consent to allow data collection by cookies and scripts while
 * shopping on a storefront.
 */
class CustomersConsentByCustomerIdPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/consent";
	}


	/**
	 * @param string $customerId
	 * @param string $customerId
	 */
	public function __construct(
		protected string $customerId,
	) {
	}
}
