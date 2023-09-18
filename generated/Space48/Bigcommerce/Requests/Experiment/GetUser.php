<?php

namespace Space48\Bigcommerce\Requests\Experiment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getUser
 *
 * Retrieve the information of the user with the matching user ID.
 */
class GetUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}";
	}


	/**
	 * @param int $userId Id of an existing user.
	 */
	public function __construct(
		protected int $userId,
	) {
	}
}
