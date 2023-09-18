<?php

namespace Space48\Bigcommerce\Requests\Experiment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createUser
 *
 * Create a new user.
 */
class CreateUser extends Request implements HasBody
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
