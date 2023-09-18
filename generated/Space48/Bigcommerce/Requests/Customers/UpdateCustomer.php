<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCustomer
 *
 * Updates a *Customer*.
 *
 * **Read Only Fields**
 * *   id
 * *   date_created
 * *   date_modified
 * *
 * accepts_marketing
 * *   addresses
 * *   form_fields
 *
 * ## Notes
 * The `_authentication` object exposes
 * functionality associated with the customer’s ability to log in to the store. All properties of the
 * `_authentication` object are optional.
 * When the `_authentication` object is not supplied with an
 * update request, then the existing customer password remains the same.
 * ## Updating Passwords
 * To
 * manually update a customer password in the same way as the control panel, supply a value for the
 * `password` field:
 *
 * ```js showLineNumbers copy
 * {
 *     "_authentication": {
 *         "password":
 * "12w69Y217PYR96J"
 *     }
 * }
 *
 * ```
 *
 * #### Confirming Passwords
 * An additional optional
 * `password_confirmation` field can also be sent, providing password confirmation as a service:
 * ```js
 * showLineNumbers copy
 * {
 *     "_authentication": {
 *        "password": "12w69Y217PYR96J"
 *
 * "password_confirmation": "12w69Y217PYR96J"
 *     }
 * }
 * ```
 * #### Forcing Password Resets
 * To force a
 * customer to reset their password upon their next login attempt, give the `force_reset` field a value
 * of true, as shown here:
 * ```js showLineNumbers copy
 * {
 *     "_authentication": {
 *         "force_reset":
 * true
 *     }
 * }
 * ```
 */
class UpdateCustomer extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}";
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function __construct(
		protected int $customerId,
	) {
	}
}
