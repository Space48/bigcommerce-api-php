<?php

namespace Space48\BigcommerceApi\Requests\CustomerImpersonationToken;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createTokenWithCustomerImpersonation
 *
 * Returns a Storefront API token that allows your application to impersonate customers when making
 * GraphQL `POST` requests. For more information on how to use the returned token, see [customer
 * impersonation
 * tokens](/docs/storefront-auth/tokens/customer-impersonation-token#create-a-token).
 *
 * **Required
 * Scopes**
 * * `Manage` `Storefront API Customer Impersonation Tokens`
 */
class CreateTokenWithCustomerImpersonation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/storefront/api-token-customer-impersonation";
	}


	public function __construct()
	{
	}
}
