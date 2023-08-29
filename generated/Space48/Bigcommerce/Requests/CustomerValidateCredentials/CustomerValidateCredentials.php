<?php

namespace Space48\Bigcommerce\Requests\CustomerValidateCredentials;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CustomerValidateCredentials
 *
 * Validate a customer credentials - This endpoint has special rate limiting protections to protect
 * against abuse.
 */
class CustomerValidateCredentials extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers/validate-credentials";
	}


	public function __construct()
	{
	}
}
