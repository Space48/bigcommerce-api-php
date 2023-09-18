<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCustomer
 *
 * Creates a *Customer*.
 * **Required Fields**
 * *   `first_name`
 * *   `last_name`
 * *   `email`
 * **Read Only
 * Fields**
 * *   `id`
 * *   `date_created`
 * *   `date_modified`
 * *   `accepts_marketing`
 * *   `addresses`
 * *
 * `form_fields`
 * ## Notes
 * The `_authentication` object exposes functionality associated with the
 * customer’s ability to log in to the store. All properties of the `_authentication` object are
 * optional.
 * When the `_authentication` object is not supplied with an update request, then the
 * existing customer password remains the same.
 * ## Updating Passwords
 * To manually update a customer
 * password in the same way as the control panel, supply a value for the password field:
 * ```json
 * {
 *
 * "_authentication": {
 *         "password": "12w69Y217PYR96J"
 *     }
 * }
 * ```
 * ## Confirming Passwords
 * An
 * additional optional `password_confirmation` field can also be sent, providing password confirmation
 * as a service:
 * ```json
 * {
 *     "_authentication": {
 *        "password": "12w69Y217PYR96J",
 *
 * "password_confirmation": "12w69Y217PYR96J"
 *     }
 * }
 * ```
 * ## Forcing Password Resets
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
class CreateCustomer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	public function __construct()
	{
	}
}
