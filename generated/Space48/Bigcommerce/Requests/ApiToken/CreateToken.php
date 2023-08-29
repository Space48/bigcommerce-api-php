<?php

namespace Space48\Bigcommerce\Requests\ApiToken;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createToken
 *
 * Creates a Storefront API token.
 *
 * **Required Scopes**
 * * `Manage` `Storefront API Tokens`
 */
class CreateToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/storefront/api-token";
	}


	public function __construct()
	{
	}
}
