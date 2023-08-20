<?php

namespace Space48\BigcommerceApi\Requests\CustomerAttributes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CustomersAttributesPost
 *
 * Creates a Customer Attribute. Multiple customer attributes can be created in one call.
 *
 * **Required
 * Fields**
 * * name
 * * type
 *
 * **Limits**
 * * Limit of 3 concurrent requests.
 *
 * **Notes**
 *
 * Once the data type
 * is set, it cannot be changed. The attribute will need to be deleted then created again with the new
 * data type. This will also delete it from the customer.
 *
 * Customer attributes are created separately
 * from the customer. After the name and type are created, then the attributes can be added to the
 * customer.
 *
 * A store cannot have more than 50 customer attributes.
 */
class CustomersAttributesPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers/attributes";
	}


	public function __construct()
	{
	}
}
