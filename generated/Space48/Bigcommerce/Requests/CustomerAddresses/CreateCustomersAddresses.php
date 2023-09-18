<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCustomersAddresses
 *
 * Creates a Customer Address. Multiple customer addresses can be created in one call.
 *
 * **Required
 * Fields**
 * * **customer_id**
 * * **first_name**
 * * **last_name**
 * * **city**
 * * **country_code**
 * *
 * **address1**
 *
 * **Notes**
 * * A unique customer address is a combination of the following core address
 * fields:
 *   * **customer_id**
 *   * **first_name**
 *   * **last_name**
 *   * **company**
 *   * **phone**
 *   *
 * **address_type**
 *   * **address1**
 *   * **address2**
 *   * **city**
 *   * **country_code**
 *   *
 * **state_or_province**
 *   * **postal_code**
 * * An attempt to create an address that already exists will
 * result in no change to the address or custom form field values, an HTTP 200 return code, and the
 * address will be absent from the response body.
 */
class CreateCustomersAddresses extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers/addresses";
	}


	public function __construct()
	{
	}
}
