<?php

namespace Space48\Bigcommerce\Requests\CustomerPasswords;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * validateCustomerPassword
 *
 * **This endpoint has special rate limiting protections to protect against abuse.**
 *
 * Provided a
 * password, will return a true/false response indicating if the provided password matches the
 * customer’s current password. This endpoint is useful if you want to power the login of another
 * system using BigCommerce’s stored customer accounts, or as a safe way to migrate passwords to
 * another system (by checking them against BigCommerce’s password, and if correct, storing it in
 * another system securely.) If the password matches what’s stored against the customer account, the
 * response will be:
 *
 * ```js showLineNumbers copy
 * {
 *     "success": "true"
 * }
 * ```
 * If the password does NOT
 * match, the response will instead be:
 *
 * ```js showLineNumbers copy
 * {
 *     "success": "false"
 * }
 * ```
 */
class ValidateCustomerPassword extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/validate";
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function __construct(
		protected int $customerId,
	) {
	}
}
