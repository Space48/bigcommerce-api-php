<?php

namespace Space48\Bigcommerce\Requests\Customers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCustomers
 *
 * Creates Customers. Create up to 10 customers in one call.
 *
 * **Required Fields**
 * * last_name
 * *
 * first_name
 * * email
 *
 * **Required Fields Customer Address**
 * * first_name
 * * city
 * * country_code
 * *
 * last_name
 * * address1
 *
 * **Required Fields Attributes**
 * * Attributes must be
 * [created](/docs/rest-management/customers/customer-attributes#create-a-customer-attribute)
 * **BEFORE** creating a customer.
 * * attribute_id
 * * attribute_value -- This is input as a string,
 * regardless of the
 * [Type](/docs/rest-management/customers/customer-attributes#create-a-customer-attribute).
 *
 * **Limits**
 * *
 * Create 20 customers over the span of an hour. Attempting to make more than 20 API calls will result
 * in a `429` return status until the hour has lapsed.
 *
 * **Notes**
 *
 * A customer can be created with
 * global access or channel-specific access.
 * * **Global access:**
 *   * Make sure the channel has
 * `allow_global_logins` enabled. This is on by default only for the default storefront. Find more info
 * at [Customer Settings > Channel](/docs/rest-management/customers/customer-settings-channel).
 *   *
 * Omit `channel_ids` field, or provide `channel_ids: null`.
 * * **Channel-specific access:**
 *   * Provide
 * a `channel_ids` array containing the channels accessible by the customer. This array cannot be
 * empty.
 */
class CreateCustomers extends Request implements HasBody
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
