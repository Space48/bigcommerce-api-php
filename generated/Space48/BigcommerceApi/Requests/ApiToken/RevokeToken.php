<?php

namespace Space48\BigcommerceApi\Requests\ApiToken;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * revokeToken
 *
 * Revoke access for a Storefront API token. Only revoke compromised tokens under emergency situations.
 * Let uncompromised short-lived tokens expire naturally, as you do not need to revoke these.
 */
class RevokeToken extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/storefront/api-token";
	}


	public function __construct()
	{
	}
}
