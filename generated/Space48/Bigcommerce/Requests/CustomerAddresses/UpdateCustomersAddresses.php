<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCustomersAddresses
 *
 * Updates a Customer Address. Multiple customer addresses can be updated in one call.
 *
 * **Required
 * Fields**
 * * **id** -- ID of the *Customer Address*
 *
 * **Limits**
 * * Limit of **3** concurrent
 * requests.
 *
 * **Notes**
 * * A unique customer address is a combination of the following core address
 * fields:
 *   * **first_name**
 *   * **last_name**
 *   * **company**
 *   * **phone**
 *   * **address_type**
 *   *
 * **address1**
 *   * **address2**
 *   * **city**
 *   * **country_code**
 *   * **state_or_province**
 *   *
 * **postal_code**
 * * An attempt to update an address such that it becomes identical to another address
 * that already exists will result in no change to the target address or custom form field values. The
 * response will have an HTTP 200 return code, and the address will be absent from the response body.
 */
class UpdateCustomersAddresses extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/addresses";
	}


	public function __construct()
	{
	}
}
