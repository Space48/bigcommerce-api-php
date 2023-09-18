<?php

namespace Space48\Bigcommerce\Requests\CustomerAttributeValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * upsertCustomersAttributeValues
 *
 * Upserts Customer Attribute Values. Updates the attribute values on the Customer. Multiple customer
 * attribute values can be updated in one call.
 *
 * Upsert checks for an existing record. If there is
 * none, it creates the record, if there is a matching record, it updates that record.
 *
 * **Limits**
 * * 10
 * per call limit.
 */
class UpsertCustomersAttributeValues extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/attribute-values";
	}


	public function __construct()
	{
	}
}
