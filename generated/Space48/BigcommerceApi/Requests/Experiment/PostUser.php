<?php

namespace Space48\BigcommerceApi\Requests\Experiment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-user
 *
 * Create a new user.
 */
class PostUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user";
	}


	public function __construct()
	{
	}
}
