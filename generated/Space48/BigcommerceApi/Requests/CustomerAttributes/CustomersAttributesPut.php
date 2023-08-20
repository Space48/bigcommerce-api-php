<?php

namespace Space48\BigcommerceApi\Requests\CustomerAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersAttributesPut
 *
 * Updates a Customer Attribute. Multiple customer attributes can be updated in one call.
 *
 * **Required
 * Fields**
 * * id -- ID of the *Customer Attribute*
 *
 * Once the data type is set, it can not be changed.
 * The attribute will need to be deleted then created again with the new data type. This will also
 * delete it from the customer.
 *
 * **Limits**
 * * Limit of 3 concurrent requests.
 */
class CustomersAttributesPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/attributes";
	}


	public function __construct()
	{
	}
}
