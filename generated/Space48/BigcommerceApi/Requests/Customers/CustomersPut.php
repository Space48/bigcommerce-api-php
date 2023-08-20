<?php

namespace Space48\BigcommerceApi\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersPut
 *
 * Updates Customers. Subresource updates are not supported. Up to 10 customers can be updated in one
 * call.
 *
 * **Required Fields**
 * * id -- ID of the *Customer* This must be included in the request
 * body
 *
 * **Read Only Fields**
 * * id
 * * registration_ip_address
 * * date_created
 * *
 * date_modified
 *
 *
 * **Notes**
 *
 * * Attributes Values can not be updated using Update a Customer. Use the
 * [Update customer attribute
 * values](/docs/rest-management/customers/customer-attribute-values#upsert-customer-attribute-values)
 * endpoint.
 * * channel_ids -- Updating the list of channels a customer can access may create some side
 * effects in a multi-storefront situation. This list determines which customer account we will use to
 * authenticate a shopper given a channel.
 */
class CustomersPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	public function __construct()
	{
	}
}
